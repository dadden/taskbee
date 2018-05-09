<?php
/**
* User logout script - kills session
*
* PHP version 5
* @category   TaskBee
* @author     David Mohlén <davidmohlen@gmail.com>
* @license    PHP CC
* @link
*/
?>
<?php
session_start();
unset($_SESSION["user"]);
session_destroy();
header("Location: ../index.php");

?>
