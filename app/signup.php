<?php
/**
* Processing of the information sent from index.php
*
* PHP version 5
* @category   TaskBee
* @author     David Mohlén <davidmohlen@gmail.com>
* @license    PHP CC
* @link
*/
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Redirecting... | TaskBee</title>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            body {
                background-color: #191919;
                color: #fff;
            }
        </style>
    </head>

    <body>
        <?php
include "conf/conf_db.php";

/* Connect to the database */
$conn = new mysqli($hostname, $user, $password, $database);

/* Display an error if connection failed */
if ($conn->connect_error) {
    die("<p>An error occurred: " . $conn->connect_error . "</p>");
}

if (isset($_POST["signup"])) {
    // Process data from inputs and sanitize unwanted characters
    $usr = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $pswrd = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    $rpswrd = filter_input(INPUT_POST, "rpassword", FILTER_SANITIZE_STRING);

    // Check for input data and execute in database
    if ($usr && $email && $pswrd && $rpswrd) {

        // Check if password and repeated passwords match eachother
        if ($pswrd === $rpswrd){



        $hash = password_hash($pswrd, PASSWORD_DEFAULT);



        $sql = "INSERT INTO tb_users
        (username, email, password) VALUES
        ('$usr', '$email', '$hash')";
        // Run SQL
        $result = $conn->query($sql);
        // Display an error if SQL failed
        if (!$result) {
            die("<p>An error occurred</p>");
        } else {
            $_SESSION["usr"] = $usr;
        }
        // Shut down connection
        $conn->close();
        echo "<p>Account created! Redirecting to login...</p>";
        header( "refresh:2;url=../login.php" );
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["user"] = $usr;
    } else {
            // Display error message
            echo "<p>Passwords do not match";
            header( "refresh:2;url=../index.php#signup" );
        }
    }
}

?>
    </body>

    </html>
