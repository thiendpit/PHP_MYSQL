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
    <form method="GET">
        ID
        <input type="text" name="post_id">
        <input type="submit">
    </form>
    <?php
        if(isset($_GET['post_id']))
        {
            $baihienthi = $_GET['post_id'];
        }
        else
        {
            $baihienthi = 0;
        }
        // create a template
        $sql = "SELECT * FROM posts WHERE post_id=? ";

        // create a prepared stament
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            echo "SQL Statement failed!";
        }
        else
        {
            // Bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $baihienthi);
            // Run parameters inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while($row = mysqli_fetch_assoc($result))
            {
                foreach($row as $key => $value)
                {
                    echo $key . ": " . $value . "<br>";
                }
            }
        }
    ?>
</body>
</html>