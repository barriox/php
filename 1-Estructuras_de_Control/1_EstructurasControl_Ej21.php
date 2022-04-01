<?php
$num=rand(0,10);
echo "<table><tr><th>Valor</th><th>*Numero</th><th>Resultado</th></tr>";
for ($i=0;$i<=10;$i++){
    echo "<tr><td>$num</td><td>*$i</td><td>=".$num*$i."</td></tr>";
}
echo "</table>"
?>