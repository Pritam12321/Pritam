<html>
    <head>
        <tittle>Factorial</tittle>
    </head>
    <body>
        <form method='POST'>
            Enter a Number<input type='text' name='a'>
            <input type='submit' name='submit' value='submit'>
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $a=$_POST['a'];
    $fact=1;
    for($i=$a;$i>=1;$i--)
    {
        $fact = $fact*$i;
    }
    echo "Result:<input type='text' value='$fact'>";
}
?>