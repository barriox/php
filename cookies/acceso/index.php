<?php
//asignamos el valor de la cookie si existe y sino un array vacio
$users=$_COOKIE['cuenta']?? [];
$times=$_COOKIE['block']?? [];

//al presionar el submit
if(isset($_POST['submit'])){
    //asignamos las variables pasadas por POST
    $nombre=$_POST['name'];
    $contra=$_POST['pass'];
    //en caso de que el usuario NO este bloqueado entra
    if(!array_key_exists($nombre,$_COOKIE['block'])) {
        //en caso de que sea la primera vez que entra este usuario
        if (!array_key_exists($nombre, $users)) {
            $users[$nombre] = 1;
        }

        $contador = $users[$nombre];
        if ($nombre !== $contra) {//si el nombre NO coincide con la contraseña
            $contador++; //se aumenta el contador
            //si el contador llega a 3 se alcanza el número máximo de intentos
            if ($contador == 3) {
                $timestamp = $times[$nombre]?? time(); //guardamos la marca de tiempo
                setcookie("block[$nombre]", $timestamp, time() + 60);//añadimos una cookie con el tiempo restante de bloqueo
                setcookie("cuenta[$nombre]", $contador, time() - 1);//eliminamos la cookie que guardaba su contador de intentos
            } else {
                setcookie("cuenta[$nombre]", $contador);//asignamos a la cookie el contador modificado
            }
        } else {//si el nombre coincide con la contraseña redirecciona a la página web
            if($nombre!="" && $contra!="") {
                header("Location:accedido.php");
                exit();
            }
        }
    }
}
//para el contador de tiempo bloqueado
if(array_key_exists($nombre, $_COOKIE['block'])){
    //restamos el tiempo actual al guardado en la cookie
    $bloqueado=time()-$times[$nombre];
    //el resultado lo restamos a 60 para obtener el tiempo restante en lugar del transcurrido
    $bloqueado=60-$bloqueado;
    $mensaje="El usuario $nombre está bloqueado durante $bloqueado segundos";
}
//borrar las cookies
if(isset($_POST['borrar'])){
    //las recorremos y las eliminamos
    foreach($_COOKIE as $cookie){
        foreach($cookie as $nombres=>$valor) {
            setcookie("cuenta[$nombres]", null, time() - 100);
            setcookie("block[$nombres]", null, time() - 100);
        }
    }
}
var_dump($_COOKIE);
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
<form action="" method="POST" enctype="multipart/form-data">
    <label style="color:red"><?=$mensaje?></label><br />
    Nombre:<input type="text" name="name"><br />
    Contraseña:<input type="password" name="pass"><br />
    <button type="submit" name="submit">Acceder</button>
    <button type="submit" name="borrar">borrar</button>
</form>
</body>
</html>
