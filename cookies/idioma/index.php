<?php
$idioma = $_COOKIE['lang']?? "";

if (isset($_POST['submit'])){
    if($idioma=="") {
        $idioma=$_POST['idioma'];
    }
}
switch ($idioma){
    case "es":
        setcookie('lang','es');
        $saludo="Hola. bienvenido a este sitio web";
        break;
    case "fr":
        setcookie('lang','fr');
        $saludo="Bonjour. bienvenue sur ce site";
        break;
    case "en":
        setcookie('lang','en');
        $saludo="Hello. welcome to this website";
        break;
    default:
        $saludo="Hola. bienvenido a este sitio web";
        break;
}
if(isset($_POST['borrar'])){
    setcookie('lang','',time()-3600);
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
<h1><?=$saludo?></h1>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="radio" name="idioma" value="es"><label>Español</label><br />
    <input type="radio" name="idioma" value="en"><label>Inglés</label><br />
    <input type="radio" name="idioma" value="fr"><label>Francés</label><br />
    <button type="submit" name="submit">Establecer idioma</button>
    <button type="submit" name="borrar">Borrar cookies</button>
</form>
</body>
</html>
