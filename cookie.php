<?php 

$name = "thien";
$value = 22;
$time = time() + (60*60*24*7);
setcookie($name, $value, $time);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    if(isset($_COOKIE['thien'])) {
        $cookie = $_COOKIE['thien'];
        echo $cookie;
    } else {
        $cookie = "";
    }
    ?>
</body>
</html>