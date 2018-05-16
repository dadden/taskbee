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

if (isset($_POST["new-project"])) {
    // Start processing the images and move the temp files to the uploads folder
    if (isset($_FILES["image"])) {
        $file        = $_FILES['image'];
        $fileName    = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize    = $file['size'];
        $fileError   = $file['error'];
        $fileType    = $file['type'];

        $fileExt       = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array(
            'png',
            'jpg'
        );

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 2000000) {
                    $fileNameNew     = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = '../uploads/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo "<p>Project successfully uploaded. Redirecting to profile...</p>";
                    header("Refresh:2;url=../profile.php");
                } else {
                    echo "<p>File file size for your image is too big. $fileSize (Maximum 2MB)</p>";
                    header("Refresh:2;url=../profile.php");
                }
            } else {
                echo "<p>There was an error while uploading the file. $fileError</p>";
                header("Refresh:2;url=../profile.php");
            }
        } else {
            echo "<p>You cannot upload files of this type! $fileActualExt</p>";
            header("Refresh:2;url=../profile.php");
        }
    }

    if (isset($_POST["zip"])) {
        if (isset($_FILES["zip"])) {
        $file        = $_FILES['zip'];
        $fileName    = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize    = $file['size'];
        $fileError   = $file['error'];
        $fileType    = $file['type'];

        $fileExt       = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array(
            'zip',
            'rar'
        );

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 15000000) {
                    $fileNameNew     = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = '../uploads/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo "<p>Project successfully uploaded. Redirecting to profile...</p>";
                    header("Refresh:2;url=../profile.php");
                } else {
                    echo "<p>File file size for your project is too big. $fileSize (Maximum 15MB)</p>";
                    header("Refresh:2;url=../profile.php");
                }
            } else {
                echo "<p>There was an error while uploading the file. $fileError</p>";
                header("Refresh:2;url=../profile.php");
            }
        } else {
            echo "<p>You cannot upload files of this type! $fileActualExt</p>";
            header("Refresh:2;url=../profile.php");
        }
    }


    }

    // Process data from inputs and sanitize unwanted characters
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $desc = filter_input(INPUT_POST, "desc", FILTER_SANITIZE_STRING);
    $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_STRING);
    $fileDestination = filter_input(INPUT_POST, "")

    // Check for input data and execute in database
    if ($name && $desc && $user){
        $sql = "INSERT INTO tb_projects (user, name, description, image, zip) VALUES ('$user', '$name', '$desc')";
        // Run SQL
        $result = $conn->query($sql);
        //Display an error if SQL failed
        if (!result) {
            die("<p>An error occurred</p>");
        }

        // Shut down connection
        $conn->close();
        echo "<p>Project uploaded successfully. Redirecting to profile...</p>";
    }


}

?>

    </body>

    </html>