<?php

if(isset($_POST['submit'])) 
{
    include_once("../inc/db.inc.php");
    $title = $_POST['post_title'];
    $desc = $_POST['post_desc'];
    $content = $_POST['post_content'];

    if(empty($title) || empty($desc) || empty($content))
    {
        header("Location: ../insertpost.php?insertpost=empty");
    }
    else
    {
        header("Location: ../insertpost.php?insertpost=success");
    }
}
else
{
    header("Location: ../insertpost.php?insertpost=error");
}
?>