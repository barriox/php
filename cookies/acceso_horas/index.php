<?php
$users=$_COOKIE['usuarios']?? [];
$times=$_COOKIE['tiempos']?? [];
if(isset($_POST['submit'])){
    $nombre=$_POST['name'];
    $users[$nombre]++;
    setcookie("usuarios[$nombre]",$users[$nombre]);
    $timestamp=time();
    $times[$nombre] .= $timestamp." ";
    setcookie("tiempos[$nombre]",$times[$nombre]);
    $personaltime=explode(" ", substr($times[$nombre],0,-1));
    foreach($personaltime as $tiempos){
        $hora=date("H:i:s", $tiempos);
        echo "$nombre ha entrado a las $hora <br>";
    }
    echo "$nombre ha accedido un total de $users[$nombre] veces";
}
var_dump($_COOKIE);
if(isset($_POST['borrar'])){
    foreach($_COOKIE as $cookie){
        foreach($cookie as $nombres=>$valor) {
            setcookie("usuarios[$nombres]", null, time() - 100);
            setcookie("tiempos[$nombres]", null, time() - 100);
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
</head>
<body>
<form action="" method="POST">
    Nombre: <input type="text" name="name">
    <button type="submit" name="submit">Acceder</button>
    <button type="submit" name="borrar">borrar</button>
</
</form>
</body>
</html>
