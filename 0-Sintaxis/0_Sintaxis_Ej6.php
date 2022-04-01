<?php
$num=1200.4;
$num2=decbin($num);
echo "\$num = $num";
echo "<br>Conversion a binario de \$num: $num2<br>";
echo "Tipo de \$num=".gettype($num).", tipo de la conversion: ".gettype($num2);
echo "<br>Conversion a octal de \$num: ".decoct($num);
echo "<br>Conversion a hexadecimal de \$num: ".dechex($num);
?>