<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="refresh" content="2">
</head>
<body>
<?php
echo "Segundos pasados desde el 1 de enero de 1970 hasta la actualidad: ".time()."<br />";
echo "Fecha actual: ".date("Y-m-d H:i:s")."<br />";
$fecha_actual=date("Y-m-d H:i:s");
echo "Fecha actual +25 horas: ".date("Y-m-d H:i:s",strtotime($fecha_actual."+ 25 hours"));
?>
</body>
</html>