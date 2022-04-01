<?php
const EDAD=23;
$num=100;
$num=$num-EDAD;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 1 - Constantes</title>
	<meta charset="utf-8">
</head>
<body>

<?php
echo "Constante valor: ".EDAD."<br>";
echo "Años restantes hasta cumplir los 100: $num";
header( "refresh:2;url=index.html" );
?>
</table>
</body>
</html>
