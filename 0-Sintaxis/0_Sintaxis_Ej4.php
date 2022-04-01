<?php
$a=10;
echo "Valor de la variable \$a = $a y es de tipo ".gettype($a)."<br />";
$a="miguel";
echo "Valor de la variable \$a = $a y es de tipo ".gettype($a)."<br />";
$a=5.45;
echo "Valor de la variable \$a = $a y es de tipo ".gettype($a)."<br />";
$a=true; //false no se visualizaria, true se visualiza como 1
echo "Valor de la variable \$a = $a y es de tipo ".gettype($a)."<br />";
$a=null; //null no se visualiza
echo "Valor de la variable \$a = $a y es de tipo ".gettype($a)."<br />";
?>