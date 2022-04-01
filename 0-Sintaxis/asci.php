<!DOCTYPE html>
<html lang="es">
<head>
	<title>Tabla por PHP</title>
	<meta charset="utf-8">
	<meta name="description" content="tabla generada por php">
	<meta name="keywords" content="php table html">
	<meta name="author" content="Miguel Barrio">
	<!--<style>
	table{display:table;border: solid 1px black;}
	table tr{display:table-cell;}
	table tr td{display:block;border: solid 1px black;height:2.2rem;}
	</style>-->
	<style>tr,td{border:solid 1px black; border-collapse:collapse;}
	</style>
	
</head>
<body>
<!--<table style="text-align: center;border: solid 1px black; border-collapse: collapse;">
<tr><th>Numero</th><th>ASCII</th></tr>
<?php
for($i=0;$i<255;$i++){
	echo "<tr><td>$i</td><td>".utf8_encode(chr($i))."</td></tr>";	
}
?>-->

<!--<table>
<?php
for($i=0;$i<255;$i++){
	if($i==0){
		echo"<tr>";
	}elseif(($i==20)||($i==40)||($i==60)||($i==80)||($i==100)||($i==120)||($i==140)||($i==160)||($i==180)||($i==200)||($i==220)||($i==240)){
	echo"</tr><tr>";
	}
	/*echo "<td>Numero $i</td><td>".utf8_encode(chr($i))."</td>";*/
	echo "<td>Numero ".$i."<br>Ascii ".utf8_encode(chr($i))."</td>";
		
}
?>
</tr>
</table>-->

<table style="border:solid 1px black; border-collapse:collapse;">
<?php
$columnas=10;
for($i=0;$i<$columnas;$i++){
	echo "<th>Numero</th><th>ASCII</th>";
}
$filas=ceil(128/$columnas);
		
for($i=0;$i<$filas;$i++){
	echo "<tr><td>$i</td><td>".chr($i)."</td><td>".($i+$filas)."</td><td>".chr($i+$filas)."</td><td>".($i+$filas*2)."</td><td>".chr($i+$filas*2)."</td><td>".($i+$filas*3)."</td><td>".chr($i+$filas*3)."</td><td>".($i+$filas*4)."</td><td>".chr($i+$filas*4)."</td><td>".($i+$filas*5)."</td><td>".chr($i+$filas*5)."</td><td>".($i+$filas*6)."</td><td>".chr($i+$filas*6)."</td><td>".($i+$filas*7)."</td><td>".chr($i+$filas*7)."</td><td>".($i+$filas*8)."</td><td>".chr($i+$filas*8)."</td><td>".($i+$filas*9)."</td><td>".chr($i+$filas*9)."</td></tr>";
}
?>
</table>
</body>
</html>
