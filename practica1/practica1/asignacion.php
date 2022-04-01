<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 1 - Asignación</title>
	<meta charset="utf-8">
</head>
<body>
<?php
echo "El valor de la asignacion \$a=9 es ".($a=9);
echo "<br>El valor de la asignacion \$a=6+7 es ".($a=6+7);
echo "<br>El valor de la asignacion \$a=rand(1,7) es ".($a=rand(1,7));
header( "refresh:5;url=index.html" );
?>
</body>
</html>
