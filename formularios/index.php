<?php
if(isset($_POST['submit'])){
$error="";
if(!empty($_POST['name'])&&!empty($_POST['password'])){
	$name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
	$pass=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
	echo $name."-------".$pass;
	if($name!=$pass){
		$error="No coinciden";
	}else{
		header("Location:sitio.php?name=$name&pass=$pass");
		exit();
	}
}else{
	$error="Los campos no pueden estar vacios";
}}
?>
<!doctype html>
<html lang="es">
<head>
	<title>Tabla por PHP</title>
	<meta charset="utf-8">
	<style>#err{color:red;}li{display:inline-block;}li{float:left;display:inline-block;}body{display:inline-block;}</style>
</head>
<body>
<form action="index.php" method="POST">
	<label>Nombre</label>
	<input type="text" name="first_name"><br><br>
	<label>Apellidos</label>
	<input type="text" name="last_name"><br><br>
	<label>Direccion</label>
	<input type="text" name="adress"><br><br>
	<label>Fecha nacimiento</label>
	<input type="date" name="date"><br><br>
	<label>Edad</label>
	<input type="number" name="age"><br><br>
	<label>Idiomas:</label>
	<ul>
		<li><label>Ingles</label>
		<input type="checkbox" name="idiomas[]" value="Ingles"></li>
		<li><label>Español</label>
		<input type="checkbox" name="idiomas[]" value="Espanol"></li>
		<li><label>Frances</label>
		<input type="checkbox" name="idiomas[]" value="Frances"></li>
		<li><label>Aleman</label>
		<input type="checkbox" name="idiomas[]" value="Aleman"></li>
	</ul><br><br>
	<label>Hombre</label>
	<input type="radio" name="gender" value="man">
	<label>Mujer</label>
	<input type="radio" name="gender" value="woman">
	<label>No aporta</label>
	<input type="radio" name="gender" value="nogender"><br><br>
	<label>Estudios: </label>
	<ul>
		<li><label>Ingles</label>
		<input type="checkbox" name="estudios[]" value="ESO"></li>
		<li><label>Español</label>
		<input type="checkbox" name="estudios[]" value="BACHILLERATO"></li>
		<li><label>Frances</label>
		<input type="checkbox" name="estudios[]" value="UNIVERSIDAD"></li>
	</ul><br><br>
	
	
	
	<label>Contraseña</label>
	<input type="password" name="password">
	
	<label id="err"><?=$error?></label><br><br>
	<input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>
