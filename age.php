<?php
$age=array("X"=>"25","Y"=>"28","Z"=>"30");
echo "Amit is".$age['X']."Years old";
foreach($age as $x=>$x_value)
{
    echo "key=".$x."value=".$x_value;
    echo"<br>";
}
?>