<?php
$num=20;
$oc=decoct($num);
$hex=dechex($num);
$bin=decbin($num);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Tabla por PHP</title>
	<meta charset="utf-8">
	<meta name="description" content="tabla generada por php">
	<meta name="keywords" content="php table html">
	<meta name="author" content="Miguel Barrio">
</head>
<body>

<?php
echo "Numero \$num=$num<br>
Valor octal=$oc<br>
Valor hexadecimal=$hex<br>
Valor binario=$bin";
?>
<table style="text-align: center;border: solid 1px black; border-collapse: collapse;">
	<tr><th>num</th><th>octal</th><th>hexadecimal</th><th>binario</th></tr>
	<?php
	$oct=$hexa=$bina=0;
	for($i=0;$i<20;$i++){
		$oct=decoct($i);
		$hexa=dechex($i);
		$bina=decbin($i);
		echo "<tr><td>$i</td><td>$oct</td><td>$hexa</td><td>$bina</td></tr>";
	}
	?>
</table>
</body>
</html>
