<?php
$edad=rand(1,150);
$mensaje="";
switch(true){
	case ($edad<=11):
		$mensaje="Tienes $edad años, eres un niño";
		break;
	case ($edad>11 && $edad<=17):
		$mensaje="Tienes $edad años, eres un adolescente";
		break;
	case ($edad>17 && $edad<=35):
		$mensaje="Tienes $edad años, eres un joven";
		break;
	case ($edad>35 && $edad<=65);
		$mensaje="Tienes $edad años, eres un adulto";
		break;
	case ($edad>65);
		$mensaje="Tienes $edad años, eres un jubilado";
		break;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 1 - Selección</title>
	<meta charset="utf-8">
</head>
<body>
<?php
echo $mensaje;
header( "refresh:2;url=index.html" );
?>
</body>
</html>
