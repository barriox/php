<?php
$num=rand(1,1000);
$mensaje=($num%2==0) ? " es Par":" es Impar";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 1 - Ternario</title>
	<meta charset="utf-8">

</head>
<body>

<?php
echo $num, $mensaje;
header( "refresh:2;url=index.html" );
?>
</table>
</body>
</html>
