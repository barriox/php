<?php
$user=$_SERVER['PHP_AUTH_USER'];
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
<h1>Esto es una pagina de acceso restringido</h1>
<h2>Conectado como <?=$user?></h2>
</body>
</html>