
<?php
    if (isset($_REQUEST['submit'])){
        // $a = $_GET['c'];
        $a = $_REQUEST['c'];

        $cal = 33.8;
        $ans = $a*$cal;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C° to F°</title>
</head>
<body>
    <form action="" method="get">
        <table align="center" border="2">
            <tr>
                <td colspan="2" align="center">Input Data</td>
            </tr>
            <tr>
                <td>Temp in °C</td>
                <td><input type="number" name="c" id=""></td>
            </tr>
            <tr>
                <td>Temp in °F</td>
                <td><input type="number" name="f" id="" value="<?php echo $ans; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="" value="Convert"></td>
            </tr>
        </table>
    </form>
</body>
</html>