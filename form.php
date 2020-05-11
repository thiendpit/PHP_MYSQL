<?php

if(isset($_POST['submit'])) {
    $userName = $_POST['username'];
    $pass = $_POST['password'];
    
    $names = array("Thien", "Kieu", "Phuoc");

    $min = 5;
    $max = 10;

    if(strlen($userName) < $min) {
        echo "The username must be at least 5 characters long.<br>";
    }

    if(strlen($userName) > $max) {
        echo "Username exceeds 10 characters.<br>";
    }

    if(!in_array($userName, $names)) {
        echo "You are not authorized to login.<br>";
    } else {
        echo "Welcome " . $userName . "!<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">
        <input type="text" placeholder="Enter Username" name="username"> <br>
        <input type="password" placeholder="Enter Password" name="password"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>