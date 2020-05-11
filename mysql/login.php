<?php

include_once("./db.php");


if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // $hashFormat = "$2y$10$";
    // $salt = "thienkute";
    // $hashF_and_salt = $hashFormat . $salt;
    // $encrypt_password = crypt($password, $hashF_and_salt);

    // $encrypt_password = password_hash($password, PASSWORD_DEFAULT);
    $salt = "thiendpit";
    $encrypt_password = crypt($password, $salt);

    $query = "INSERT INTO users(user_name, user_pass) VALUES ('$username' , '$encrypt_password')";

    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo "Insert database failed.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Username
                            <div class="form-group">
                                <input type="text" class="form-control" name="username">
                            </div>
                            Password
                            <div class="form-group">
                                <input type="password" class="form-control" name="password">
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Login" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>