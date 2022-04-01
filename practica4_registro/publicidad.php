<?php
session_start();
$msj="";
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    session_start();
}
$logged=false;
if(isset($_SESSION['usersession'])){
    $logged=true;
    $name=$_SESSION['usersession'];
    $msj="<h3>Estas loggeado como $name</h3>";
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
<?php if($logged): ?>
<form action="" method="POST">
    <button type="submit" name="logout" style="float:right">Log Out</button>
</form>
<?php endif ?>
<h1>Hola estas en el area de PUBLICIDAD</h1>
<h2>Accesible para todos</h2>
<?php if($msj!=""): ?>
    <?php echo $msj?>
<?php endif ?>
<button type="button"><a href="index.php">Volver</a></button>
</body>
</html>
