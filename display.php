<?php
if(isset($_REQUEST['submit'])){
    $roll=$_REQUEST['roll'];
    $name=$_REQUEST['name'];
    $math=$_REQUEST['math'];
    $comp=$_REQUEST['comp'];
    $eng=$_REQUEST['eng'];
    $f=1;
}else{
    $f=0;
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
    <form action=""method="get">
        <table align="center" border="2">
            <tr>
                <td>Roll</td>
                <td><input type="number" name="roll" id=""></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Math</td>
                <td><input type="number" name="math" id=""></td>
            </tr>
            <tr>
                <td>Computer</td>
                <td><input type="number" name="comp" id=""></td>
            </tr>
            <tr>
                <td>English</td>
                <td><input type="number" name="eng" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" id=""></td>
            </tr>
        </table>
    </form>
    <?php
    if($f==1){
    ?>
    <br>
    <hr>
    <table align="center" border="2">
        <tr>
            <td colspan="5" align="center">Display Data</td>
        </tr>
        <tr>
            <td>Roll</td>
            <td>Name</td>
            <td>Math</td>
            <td>Computer</td>
            <td>English</td>
        </tr>
        <tr>
            <td><?php echo $roll; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $math; ?></td>
            <td><?php echo $comp; ?></td>
            <td><?php echo $eng; ?></td>
        </tr>
    </table>
    <?php
    }
    ?>
</body>
</html>