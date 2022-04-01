<?php
$dia=rand(1,31);
$mes=rand(1,12);
$y=rand(1,2021);
$hora=rand(1,24);
$min=rand(1,60);
$seg=rand(1,60);
$fecha=date("Y-m-d h:i:s", strtotime("$y-$mes-$dia $hora:$min:$seg"));
echo "Fecha: $fecha<br />";
$tiempo=strtotime("$y-$mes-$dia $hora:$min:$seg");
$tiempo=trim($tiempo, "-");
$tiempo+=time();
echo "Tiempo transcurrido hasta la actualidad: $tiempo<br />";
echo "Tiempo d fecha unix hasta la actualidad: ".time()."<br />";
?>
