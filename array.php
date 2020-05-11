<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numberList = array();
$numberList = [23, 41, '455', 222, '<h1>Hello</h1>'];

// echo $numberList; // error
print_r($numberList);
?>
</body>
</html>