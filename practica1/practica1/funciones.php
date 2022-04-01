<?php
$a=6;
$b=5;
function mayor(&$a,$b){
	$a*=2;
	$b*=2;
	if($a>$b){
		return "\$a=$a es mayor que \$b=$b";
	}elseif($a<$b){
		return "\$b=$b es mayor que \$a=$a";
	}else{
		return "\$a=$a es igual que \$b=$b";
	}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 1 - Funciones</title>
	<meta charset="utf-8">

</head>
<body>

<?php
echo "Valores antes de la llamada a la funcion: <br>";
echo "Valor \$a=$a<br>";
echo "Valor \$b=$b<br><br>Comparacion valores duplicados: <br>";
$mensaje=mayor($a,$b);
echo $mensaje;
echo "<br><br>Valores despues de la llamada a la funcion: <br>";
echo "Valor \$a=$a<br>";
echo "Valor \$b=$b<br><br>";
echo "Si utilizamos la sintaxis 'global' sobre \$b al llamar a la función ocurre lo mismo que al pasar por referencia, todas las operaciones que se apliquen en el ámbito local de la función se aplicaran también a la variable \$b fuera de la función";
header( "refresh:30;url=index.html" );
?>

</table>
</body>
</html>
