<?php

include_once('./db.inc.php');

$title = $_POST['post_title'];
$desc = $_POST['post_desc'];
$content = $_POST['post_content'];

$sql = "INSERT INTO posts (post_title, post_desc, post_content) VALUES ('$title', '$desc', '$content');";
mysqli_query($conn, $sql);

header("Location: ../insertpost.php");

?>