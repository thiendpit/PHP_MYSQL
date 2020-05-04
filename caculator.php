<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator PHP</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="num1" placeholder="Enter number 1">
        <input type="text" name="num2" placeholder="Enter number 2">
        <select name="operator" id="">
            <option value="cong">+</option>
            <option value="tru">-</option>
            <option value="nhan">*</option>
            <option value="chia">/</option>
        </select>
        <input type="submit" name="submit" value="Caculator">
    </form>
    <p>Result: </p>
    <?php 
        if(isset($_GET['submit'])) 
        {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case 'cong':
                    echo $num1 + $num2;
                    break;
                case 'tru':
                    echo $num1 - $num2;
                    break;
                case 'nhan':
                    echo $num1 * $num2;
                    break;
                default:
                    if($num2 != 0)
                    {
                        echo $num1 / $num2;
                    }
                    break;
            }
        }
    ?>
</body>
</html>