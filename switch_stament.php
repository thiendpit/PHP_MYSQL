<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$num = 23;
switch($num) {
    case $num % 2 == 0:
        echo "Even number";
    break;
    case $num % 2 != 0:
        echo "Odd number";
    break;
}
?>
</body>
</html>