<?php
/**
* Processing of the inputs from login.php in the root folder
*
* PHP version 5
* @category   TaskBee
* @author     David Mohlén <davidmohlen@gmail.com>
* @license    PHP CC
* @link
*/
?>
    <?php
    include "conf/conf_db.php";

    /* Connect to the database */
    $conn = new mysqli($hostname, $user, $password, $database);

    /* Display an error if connection failed */
    if ($conn->connect_error) {
    die("<p>An error occurred: " . $conn->connect_error . "</p>");
    }

    if (isset($_POST["login"])) {
    // Process data from inputs and sanitize unwanted characters
    $usr = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $pswrd = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

        echo "$usr $pswrd";

    // Check for input data and select from database
    if ($usr && $pswrd) {

        $sql = "SELECT * FROM tb_users WHERE username = '$usr'";

        // Run SQL
        $result = $conn->query($sql);

        // Fetch results from database search
        $row = $result->fetch_assoc();

        // Check if text input password matches hash in database using password_verify()
        if (password_verify($pswrd, $row['password'])) {
            echo "Yes";
            // Start the session
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["user"] = $usr;
        } else {
            echo "No 1";
        }
    } else {
        echo "No 2";
    }

        // Shut down connection
        $conn->close();
        header( "Location: ../profile.php" );
    }
    ?>
