<?php
if(isset($_REQUEST['submit'])){
    $num=$_REQUEST['num'];
    $fact=1;
    for($i=$num;$i>=1;$i--){
        $fact = $fact*$i;
    }
    header("location:fact2.php?fact=$fact");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scal=1.0">
    <title>Document</title>
    </head>
    <body>
        <form action="" method="">
            <table align="center" border="get">
            <tr>
                <td colspan="2" align="center">Input data</td>
            </tr>
            <tr>
            <td>Number:</td>
            <td><input type="number" name="num" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id="" value="submit"</td>
            </tr>
            </table>
        </form>
    </body>
</html>