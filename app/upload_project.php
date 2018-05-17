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

        if (isset($_FILES["thumb"])) {
        $tfile        = $_FILES['thumb'];
        $tfileName    = $tfile['name'];
        $tfileTmpName = $tfile['tmp_name'];
        $tfileSize    = $tfile['size'];
        $tfileError   = $tfile['error'];
        $tfileType    = $tfile['type'];

        $tfileExt       = explode('.', $tfileName);
        $tfileActualExt = strtolower(end($tfileExt));

        $tallowed = array(
            'jpg',
            'png'
        );

        if (in_array($tfileActualExt, $tallowed)) {
            if ($tfileError === 0) {
                if ($tfileSize < 15000000) {
                    $tfileNameNew     = uniqid('', true) . "." . $tfileActualExt;
                    $tfileDestination = '../uploads/' . $tfileNameNew;
                    move_uploaded_file($tfileTmpName, $tfileDestination);
                    echo "<p>Project successfully uploaded. Redirecting to profile...</p>";
                    header("Refresh:2;url=../profile.php");
                } else {
                    echo "<p>File file size for your thumbnail is too big. $tfileSize (Maximum 1MB)</p>";
                    header("Refresh:2;url=../profile.php");
                }
            } else {
                echo "<p>There was an error while uploading the file. $tfileError</p>";
                header("Refresh:2;url=../profile.php");
            }
        } else {
            echo "<p>You cannot upload files of this type! $tfileActualExt</p>";
            header("Refresh:2;url=../profile.php");
        }
    }

        if (isset($_FILES["zip"])) {
        $pfile        = $_FILES['zip'];
        $pfileName    = $pfile['name'];
        $pfileTmpName = $pfile['tmp_name'];
        $pfileSize    = $pfile['size'];
        $pfileError   = $pfile['error'];
        $pfileType    = $pfile['type'];

        $pfileExt       = explode('.', $pfileName);
        $pfileActualExt = strtolower(end($pfileExt));

        $pallowed = array(
            'zip',
            'rar'
        );

        if (in_array($pfileActualExt, $pallowed)) {
            if ($pfileError === 0) {
                if ($pfileSize < 15000000) {
                    $pfileNameNew     = uniqid('', true) . "." . $pfileActualExt;
                    $pfileDestination = '../uploads/' . $pfileNameNew;
                    move_uploaded_file($pfileTmpName, $pfileDestination);
                    echo "<p>Project successfully uploaded. Redirecting to profile...</p>";
                    header("Refresh:2;url=../profile.php");
                } else {
                    echo "<p>File file size for your project is too big. $pfileSize (Maximum 15MB)</p>";
                    header("Refresh:2;url=../profile.php");
                }
            } else {
                echo "<p>There was an error while uploading the file. $pfileError</p>";
                header("Refresh:2;url=../profile.php");
            }
        } else {
            echo "<p>You cannot upload files of this type! $pfileActualExt</p>";
            header("Refresh:2;url=../profile.php");
        }
    }

    // Process data from inputs and sanitize unwanted characters
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $desc = filter_input(INPUT_POST, "desc", FILTER_SANITIZE_STRING);
    $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_STRING);

    // Check for input data and execute in database
    if ($user && $name && $desc){
        $sql = "INSERT INTO tb_projects (user, name, description, thumb, image, zip) VALUES ('$user', '$name', '$desc', '$tfileDestination', '$fileDestination', '$pfileDestination')";
        echo $sql;
        // Run SQL
        $result = $conn->query($sql);
        //Display an error if SQL failed
        if (!$result) {
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
