<?php
$user=$_SERVER['PHP_AUTH_USER'];
$pass=$_SERVER['PHP_AUTH_PW'];
if ($user!='miguel' || $pass!='miguel') {
    header('WWW-Authenticate: Basic');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no reconocido!";
    exit;
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
<h1>Bienvenido usuario <?=$user?></h1>
</body>
</html>