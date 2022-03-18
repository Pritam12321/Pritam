<?php
    if (isset($_REQUEST['submit'])) {
        $a = $_REQUEST['a'];
        $b = $_REQUEST['b'];
        $sum = $a+$b;
        
        header("location:x2.php?sum=$sum");
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <table border="2" align="center">
        <tr>
            <td colspan="2" align="center">Input Data</td>
        </tr>
        <tr>
            <td>Input A : </td>
            <td><input type="number" name="a" id=""></td>
        </tr>
        <tr>
            <td>Input B : </td>
            <td><input type="number" name="b" id=""></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" id="" value="Submit"></td>
        </tr>
        </table>
    </form>
</body>
</html>