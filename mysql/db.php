<?php 

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'loginapp';
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if(!$conn) {
    echo "Conected to database failed.";
}

?>