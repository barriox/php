<?php
session_start();
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    session_start();
}
$msj="";
if(isset($_SESSION['usersession'])){
    $name=$_SESSION['usersession'];
    $msj="<h1>Estas loggeado como $name</h1>";
    $logged=true;
}else{
    $logged=false;
}
if(isset($_POST['submit'])){
    if($_POST['name']!="" && $_POST['pass']!=""){
        if($_POST['name']==$_POST['pass']){
            $name=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $pass=filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
            $_SESSION['usersession']=$name;
            $logged=true;
            $msj="<h1>Estas loggeado como $name</h1>";
        }else{
            $msj="<p style='color:red'>El usuario o la contraseña son incorrectos</p>";
        }
    }else{
        $msj="<p style='color:red'>El usuario o la contraseña no pueden estar vacios</p>";
    }
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
    <style>
        .enlaces{
            position: absolute;
            display: flex;
            top:10%;
        }
        a{
            padding: 2rem;
        }
    </style>
</head>
<body>
<form action="index.php" method="POST">
    <?php if(!$logged): ?>
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name">
    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass">
    <button type="submit" name="submit">Log In</button>
    <?php else: ?>
        <button type="submit" name="logout" style="float:right">Log Out</button>
    <?php endif ?>
</form>
<?php echo $msj?>
<div class="enlaces">
    <h3><a href="publicidad.php">Publicidad</a></h3>
<?php if ($logged): ?>
    <h3><a href="administracion.php">Administración</a></h3>
    <h3><a href="contabilidad.php">Contabilidad</a></h3>
<?php endif ?>
</div>
</body>
</html>
