<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new post | Thien Kieu Blog</title>
    <style>
        form {
            text-align: left;
        }
        form input[type="text"] {
            width: 100%;
            display: block;
            outline: none;
        }
        .noti-error {
            color: red;
            text-align: center;
            font-size: 25px;
        }
        .noti-success {
            color: green;
            text-align: center;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="chuaform" style="width: 50%; margin: 0 auto; text-align: center;">
        <h2>Insert a post</h2>
        <form action="/PHP_MYSQL/inc/insertpost.inc.php" method="POST">
            <label for="">Name post: </label>
            <input type="text" placeholder="Name post..." name="post_title"> <br>
            <label for="">Description post: </label>
            <input type="text" placeholder="Description post..." name="post_desc"> <br>
            <label for="">Content post: </label>
            <input type="text" placeholder="Content post..." name="post_content"> <br>
            <input type="submit" value="Add new" name="submit">
        </form>
    </div>
    <?php
        $getUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if(strpos($getUrl, "insertpost=empty") == true) 
        {
            echo "<p class='noti-error'>You dit not fill in a field !</p>";
            exit();
        }
        else if(strpos($getUrl, "insertpost=error") == true)
        {
            echo "<p class='noti-error'>ERROR !!!</p>";
            exit();
        }
        else if(strpos($getUrl, "insertpost=success") == true)
        {
            echo "<p class='noti-success'>Insert Success !</p>";
            exit();
        }

        if(!isset($_GET['insertpost']))
        {
            exit();
        }
        else
        {
            $check = $_GET['inserpost'];
            if($check == "empty") 
            {
                echo "<p class='noti-error'>You dit not fill in a field !</p>";
                exit();
            } 
            else if ($check == "error")
            {
                echo "<p class='noti-error'>ERROR !!!</p>";
                exit();
            } 
            else if($check == "success")
            {
                echo "<p class='noti-success'>Insert Success !</p>";
                exit();
            }
        }
    ?>
</body>
</html>