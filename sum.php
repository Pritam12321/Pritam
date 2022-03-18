<html>
    <head>
        <title>Sum</title>
    </head>
    <body>
        <form method='POST'>
            Enter First Number:<input type ='text' name='a'>
            Enter Second Number:<input type ='text' name='b'>
            <input type='Submit' name'='Submit' Value='Submit'>
        </form>
    </body>
</html>
<?php
if(isset($_POST['Submit']))
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$a+$b;
    echo "Result:<input type='text' value='$c'/>";
}
?>