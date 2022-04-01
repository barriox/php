<?php
include "colores.php";
session_start();
if(!isset($_SESSION['sesion'])){
    $try=new Colores();
}else{
    $try=$_SESSION['sesion'];
}

$acertados=[];
$selecteda=$selectedb=$selectedc=$selectedd="";

if(isset($_POST['submit'])) {
    $_SESSION['sesion']=$try;
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $acertados=$try->prueba($a, $b, $c, $d);
    if(gettype($acertados)=="boolean"){
        $num=$try->getContador();
        header("Location:fin.php?num=$num");
    }
    foreach($try->intento as $index=>$color){
        switch($index){
            case 0:
                $selecteda=$color;
                break;
            case 1:
                $selectedb=$color;
                break;
            case 2:
                $selectedc=$color;
                break;
            case 3:
                $selectedd=$color;
                break;
        }
    }
}
if(isset($_POST['borrar'])) {
    session_unset();
    session_destroy();
    session_start();
}
if(isset($_POST['mostrar'])) {
    $try->mostrar();
    foreach($try->intento as $index=>$color){
        switch($index){
            case 0:
                $selecteda=$color;
                break;
            case 1:
                $selectedb=$color;
                break;
            case 2:
                $selectedc=$color;
                break;
            case 3:
                $selectedd=$color;
                break;
        }

    }
}
if(isset($_POST['ocultar'])) {
    foreach($try->intento as $index=>$color){
        switch($index){
            case 0:
                $selecteda=$color;
                break;
            case 1:
                $selectedb=$color;
                break;
            case 2:
                $selectedc=$color;
                break;
            case 3:
                $selectedd=$color;
                break;
        }

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
    <link rel="stylesheet" href="http://localhost/ejercicioPHP/mastermind/style.css">
</head>
<body>
<form action="" method="POST">
        <label for="selecta"></label>
        <select name="a" id="selecta">
            <option value="red" class="red" <?php if($selecteda=="red"):?>selected<?php endif ?>>Rojo</option>
            <option value="blue" class="blue" <?php if($selecteda=="blue"):?>selected<?php endif ?>>Azul</option>
            <option value="orange" class="orange" <?php if($selecteda=="orange"):?>selected<?php endif ?>>Naranja</option>
            <option value="green" class="green" <?php if($selecteda=="green"):?>selected<?php endif ?>>Verde</option>
            <option value="purple" class="purple" <?php if($selecteda=="purple"):?>selected<?php endif ?>>Morado</option>
            <option value="yellow" class="yellow" <?php if($selecteda=="yellow"):?>selected<?php endif ?>>Amarillo</option>
            <option value="brown" class="brown" <?php if($selecteda=="brown"):?>selected<?php endif ?>>Marron</option>
            <option value="pink" class="pink" <?php if($selecteda=="pink"):?>selected<?php endif ?>>Rosa</option>
        </select>
        <label for="selectb"></label>
        <select name="b" id="selectb">
            <option value="red" class="red" <?php if($selectedb=="red"):?>selected<?php endif ?>>Rojo</option>
            <option value="blue" class="blue" <?php if($selectedb=="blue"):?>selected<?php endif ?>>Azul</option>
            <option value="orange" class="orange" <?php if($selectedb=="orange"):?>selected<?php endif ?>>Naranja</option>
            <option value="green" class="green" <?php if($selectedb=="green"):?>selected<?php endif ?>>Verde</option>
            <option value="purple" class="purple" <?php if($selectedb=="purple"):?>selected<?php endif ?>>Morado</option>
            <option value="yellow" class="yellow" <?php if($selectedb=="yellow"):?>selected<?php endif ?>>Amarillo</option>
            <option value="brown" class="brown" <?php if($selectedb=="brown"):?>selected<?php endif ?>>Marron</option>
            <option value="pink" class="pink" <?php if($selectedb=="pink"):?>selected<?php endif ?>>Rosa</option>
        </select>
        <label for="selectc"></label>
        <select name="c" id="selectc">
            <option value="red" class="red" <?php if($selectedc=="red"):?>selected<?php endif ?>>Rojo</option>
            <option value="blue" class="blue" <?php if($selectedc=="blue"):?>selected<?php endif ?>>Azul</option>
            <option value="orange" class="orange" <?php if($selectedc=="orange"):?>selected<?php endif ?>>Naranja</option>
            <option value="green" class="green" <?php if($selectedc=="green"):?>selected<?php endif ?>>Verde</option>
            <option value="purple" class="purple" <?php if($selectedc=="purple"):?>selected<?php endif ?>>Morado</option>
            <option value="yellow" class="yellow" <?php if($selectedc=="yellow"):?>selected<?php endif ?>>Amarillo</option>
            <option value="brown" class="brown" <?php if($selectedc=="brown"):?>selected<?php endif ?>>Marron</option>
            <option value="pink" class="pink" <?php if($selectedc=="pink"):?>selected<?php endif ?>>Rosa</option>
        </select>
        <label for="selectd"></label>
        <select name="d" id="selectd">
            <option value="red" class="red" <?php if($selectedd=="red"):?>selected<?php endif ?>>Rojo</option>
            <option value="blue" class="blue" <?php if($selectedd=="blue"):?>selected<?php endif ?>>Azul</option>
            <option value="orange" class="orange" <?php if($selectedd=="orange"):?>selected<?php endif ?>>Naranja</option>
            <option value="green" class="green" <?php if($selectedd=="green"):?>selected<?php endif ?>>Verde</option>
            <option value="purple" class="purple" <?php if($selectedd=="purple"):?>selected<?php endif ?>>Morado</option>
            <option value="yellow" class="yellow" <?php if($selectedd=="yellow"):?>selected<?php endif ?>>Amarillo</option>
            <option value="brown" class="brown" <?php if($selectedd=="brown"):?>selected<?php endif ?>>Marron</option>
            <option value="pink" class="pink" <?php if($selectedd=="pink"):?>selected<?php endif ?>>Rosa</option>
        </select>
    <button type="submit" name="submit">Probar intento</button>
    <button type="submit" name="mostrar">Ver clave</button>
    <button type="submit" name="ocultar">Ocultar clave</button>
    <button type="submit" name="borrar">Empezar de nuevo</button>
</form>
<?=$try->getJugadas()?>
</body>
</html>
