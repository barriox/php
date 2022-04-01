<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['submit'])){
	$name=test_input($_POST['name']);
	$age=filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
	if(empty($age)){
		$age="Edad";
		error($age);
	}
	echo $age,$name;
}

}
function error($error) {
	echo'<script type="text/javascript">
        alert("Dato ',$error,' introducido incorrecto");
        window.location.href="./prueba.html";
        </script>';

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }
?>
<!doctype html>
<html lang="es">
<head>
	<title>Tabla por PHP</title>
	<meta charset="utf-8">
</head>
<body>
</body>
</html>
