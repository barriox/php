<?php
$x=rand(1,6);
$num1=rand(0,255);
$num1=dechex($num1);
$num2=rand(0,255);
$num2=dechex($num2);
$num3=rand(0,255);
$num3=dechex($num3);
echo "<h".$x." style='color:#$num1$num2$num3'>Esto es un titulo</h".$x.">";
?>