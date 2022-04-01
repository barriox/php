<?php
session_start();
if(!isset($_SESSION['newsession'])){
    $msj="Esta es la primera sesion";
    $_SESSION['newsession']=$msj;
}else{
    $msj="Ya habias accedido";
    $_SESSION['newsession']=$msj;
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
<?php echo $_SESSION['newsession'];?>
</body>
</html>
