<?php

include_once("./functions.php");

updateUser();

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
                        <form action="login_update.php" method="post">
                            Username
                            <div class="form-group">
                                <input type="text" class="form-control" name="username">
                            </div>
                            Password
                            <div class="form-group">
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <select name="id" id="">
                                    <?php 
                                        showAllData();
                                    ?>
                                    <!-- <option value="">1</option> -->
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Update" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>