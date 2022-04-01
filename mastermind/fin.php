<?php
session_start();
if(!isset($_SESSION['sesion'])){
    header("Location:index.php");
}
$num=$_GET['num'];
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¡¡¡¡¡HAS GANADO EN <?=$num?> JUGADAS!!!!!</h1>
    <button><a href="index.php">Volver al Inicio</a></button>
</body>
</html>