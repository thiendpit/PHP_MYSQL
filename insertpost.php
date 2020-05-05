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
    </style>
</head>
<body>
    <div class="chuaform" style="width: 50%; margin: 0 auto; text-align: center;">
        <h2>Insert a post</h2>
        <form action="/PHP_MYSQL/inc/insert.inc.php" method="POSt">
            <label for="">Name post: </label>
            <input type="text" placeholder="Name post..." name="post_title"> <br>
            <label for="">Description post: </label>
            <input type="text" placeholder="Description post..." name="post_desc"> <br>
            <label for="">Content post: </label>
            <input type="text" placeholder="Content post..." name="post_content"> <br>
            <input type="submit" value="Add new">
        </form>
    </div>
</body>
</html>