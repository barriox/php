<?php
echo "EN ESPAÑOL: ";
setlocale(LC_TIME, "es_ES.utf8");
echo strftime("%A, %e de %B de %Y<br />");
echo "EN FRANCES: ";
setlocale(LC_TIME, "fr_FR.utf8");
echo strftime("%A, %e de %B de %Y<br />");
echo "EN INGLES: ";
setlocale(LC_TIME, "en_US.utf8");
echo strftime("%A, %e de %B de %Y<br />");
?>