<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="refresh" content="0.01">
</head>
<body>
<?php
$fecha = new DateTime(null, new DateTimeZone('Europe/Madrid'));
echo $fecha->format('H:i:s.u');

echo "<br>";

$micro=microtime();
$pos=strpos($micro, " ");
$mseg=substr($micro,0,$pos);
$mseg=substr($mseg,1);
$fecha=date("H:i:s");
echo $fecha.$mseg;
?>
</body>
</html>
