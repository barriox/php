<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$name=filter_input(INPUT_GET,'name',FILTER_SANITIZE_STRING);
	$pass=filter_input(INPUT_GET,'pass',FILTER_SANITIZE_STRING);
}
?>
<!doctype html>
<html lang="es">
<head>
	<title>Tabla por PHP</title>
	<meta charset="utf-8">
</head>
<body>
<?php echo "Nombre: ",$name,"<br>Contraseña: ",$pass?>
</body>
</html>
