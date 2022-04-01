<!DOCTYPE html>
<html lang="es">
<head>
	<title>Prueba funciones</title>
	<meta charset="utf-8">
</head>
<body>

<?php
$a=rand(1,100);
$b=rand(0,3);
echo "\$a=$a y \$b=$b antes de la funcion<br>";
echo "Resultado de dividir= ".dividir($a,$b);
echo "<br>\$a=$a y \$b=$b despues de la funcion<br>";
function dividir($a,&$b){
	if($b==0){
		$b=1;
	}
	return $a/$b;
}
?>
</table>
</body>
</html>
