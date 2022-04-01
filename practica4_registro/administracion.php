<?php
session_start();
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    session_start();

}
$name="";
if(isset($_SESSION['usersession'])){
    $name=$_SESSION['usersession'];
    $name=strtoupper($name);
}else{
    header("Location:index.php");
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
<form action="" method="POST">
    <button type="submit" name="logout" style="float:right">Log Out</button>
</form>
<h1>Hola <?php echo $name?> estas en el area de ADMINISTRACIÓN</h1>
<button type="button"><a href="index.php">Volver</a></button>
</body>
</html>
