<?php
$f=$_GET['fact'];
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
        <table align="center" border="2">
            <tr>
                <td colspan="2" align="center">Factorial</td>
            </tr>
            <tr>
                <td><input type="number" name="n" id="" value="<?php echo $f; ?>"></td>
            </tr>
        </table>
    </body>
</html>