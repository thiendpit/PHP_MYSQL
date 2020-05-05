<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "phptest";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
mysqli_set_charset($conn, 'UTF8');

?>