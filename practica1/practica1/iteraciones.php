<?php
$mensaje="";
$contador=0;
$pares=0;
$suma=0;
while($pares<100){
	if($contador%2==0){
		$mensaje.="$contador\n";
		$pares++;
		$suma+=$contador;
	}
	$contador++;
}
/*for($i=0;$i<200;$i++){
	if($i%2==0){
		$mensaje.="$i\n";
		$contador+=$i;
	}
}*/

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 1 - Iteraciones</title>
	<meta charset="utf-8">
</head>
<body>
<?php
echo $mensaje;
echo "<br>La suma de estos 100 primeros numeros pares es: ".$suma;
header( "refresh:5;url=index.html" );
?>
</body>
</html>
