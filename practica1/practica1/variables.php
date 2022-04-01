<?php
$num1=23;
$num2=0675;
$num3=0xBB24;
$num4=0b1010;
$cad1="Esto es una cadena de caracteres";
$cad2= <<<FIN
Esto es una cadena<br>
de caracteres en <br>
varias lineas<br>
FIN;
$num5=2.5435345323453;
$num6=4325E-5;
$bol1=null;
$bol2=true;
$bol3=false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 1 - Variables</title>
	<meta charset="utf-8">
</head>
<body>
<?php
print "$num1<br>$num2<br>$num3<br>$num4<br>$num5<br>$num6<br>$bol1<br>$bol2<br>$bol3<br>$cad1<br>$cad2";
header( "refresh:5;url=index.html" );
?>
</body>
</html>
