<?php 
    include_once('../PHP_MYSQL/inc/db.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website connect database</title>
</head>
<body>
    <h1>Welcome !!</h1>
    <?php
        $sql = "SELECT * FROM posts WHERE post_id='1' ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) 
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo $row['post_id'] . "<br>";
                echo $row['post_title'] . "<br>";
            }
        }
    ?>
</body>
</html>