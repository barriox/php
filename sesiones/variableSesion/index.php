<?php
/*Puedes poner un botón submit para recargar la página.
Indica mediane mensaje si accedes haciendo un click, o bien escribiendo la url
Contabiliza todos los accesos (por click o escribiendo la url en el navegado*/
session_start();
$contador=$_SESSION['miguel']?? 0;
if(isset($_POST['submit']) || isset($_SESSION['miguel'])){
    $contador++;
    $_SESSION['miguel']=$contador;
}
echo $_SESSION['miguel'];

if(isset($_POST['borrar'])){
    session_destroy();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <button type="submit" name="submit">Acceder</button>
    <button type="submit" name="borrar">Borrar</button>
</form>
</body>
</html>
