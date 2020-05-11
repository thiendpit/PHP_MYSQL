<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

function addNumber($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}

$result = addNumber(5, 10);
echo $result;
echo "<br>";

$result2 = addNumber($result, 25);
echo $result2;

?>
</body>
</html>