<?php
$ans = $_GET['sum'];
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
    <table align="center" border="2">
        <tr>
            <td colspan="2" align="center">Display</td>
        </tr>
        <tr>
            <td>Sum : </td>
            <td><input type="number" name="sum" id="" value="<?php echo $ans; ?>"></td>
        </tr>
    </table>
</body>

</html>