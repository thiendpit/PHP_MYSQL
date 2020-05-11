<?php

include_once("./db.php");

if(isset($_POST['read'])) {

    $query = "SELECT * FROM users";

    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo "Read database failed.";
    } else {
        while($row = mysqli_fetch_assoc($result)) {
            echo "username: " . $row['user_name'] . " , password: " . $row['user_pass'] . "<br>";
        }
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
                        <form action="login_read.php" method="post">
                            Show database <br>
                            <input type="submit" class="btn btn-primary" name="read" value="READ" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>