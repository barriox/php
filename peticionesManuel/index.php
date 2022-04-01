<?php
$msj="";
if(isset($_POST['submit'])){
    $regexp1="/(^-?[1-9]+[0-9]*$) | 0+/";
    $regexp2="/^-?[1-9]+[0-9]*\/[1-9]+/";
    $regexp3="/(^-?[1-9]+[0-9]*(\/[1-9]+)?$) | 0+/";//num real
    $num=$_POST['num'];
    if(preg_match($regexp1,$num)){
        $msj="El numero es entero y real";
    }elseif(preg_match($regexp2,$num)){
        $msj="El numero es racional y real";
    }elseif(preg_match($regexp3,$num)){
        $msj.="tambien es real";
    }else{
        $msj="El numero introducido no es ni entero ni racional";
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
<h1>¿Que tipo de numero es el introducido?</h1>
<form action="" method="POST">
    <label for="numero">Numero:</label>
    <input type="text" name="num" id="numero">
    <button type="submit" name="submit">Comprobar</button>
</form>
<?=$msj?>
</body>
</html>
