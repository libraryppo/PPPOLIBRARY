<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
//$dbname = "lms";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>