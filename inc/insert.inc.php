<?php

include_once('./db.inc.php');

$title = mysqli_real_escape_string($conn, $_POST['post_title']) ;
$desc = mysqli_real_escape_string($conn, $_POST['post_desc']);
$content = mysqli_real_escape_string($conn, $_POST['post_content']);

$sql = "INSERT INTO posts (post_title, post_desc, post_content) VALUES (?, ?, ?);";

$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql))
{
    echo "SQL error!";
}
else
{
    mysqli_stmt_bind_param($stmt, "sss", $title, $desc, $content);
    mysqli_stmt_execute(($stmt));
}

header("Location: ../insertpost.php?inserpost=success");

?>