<?php
$jugada=$_GET['jugada'];
$max=$_GET['max'];
if($jugada<=$max){
	$mensaje="He acertado!!!! en $jugada jugadas";
}else{
	$mensaje="No has sido sincero!!!";
}
if(isset($_GET['mensaje'])){
	$mensaje=$_GET['mensaje'];
}
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Juego Adivina Numero</title>
    <meta charset="utf-8">
  </head>
  <body>
	<h1><?php echo $mensaje?></h1><br />
	<a href="index.php">Volver al index</a>
  </body>
</html>
