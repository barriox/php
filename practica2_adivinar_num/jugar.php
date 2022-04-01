<?php

if(isset($_POST['index']) || $_POST['reiniciar']){
$max=$_POST['reiniciar']? $_POST['max']:$_POST['rango'];
$mensaje="";
$jugada=1;
$num=(2**$max)/2;
$potencia=$max-2;
}
$acertado=null;

if(isset($_POST['empezar'])){
	$num=$_POST['num'];
	$radio=$_POST['equiv'];
	$acertado=$_POST['acertado'];
	$jugada=$_POST['jugada'];
	$max=$_POST['max'];
	$potencia=$_POST['potencia'];
	if($max==$jugada){
		$mensaje="<p style='color:red'>Has hecho ".$jugada." intentos. Número máximo de intentos alcanzado, has mentido</p>";
		$acertado=false;
	}
	switch($radio){
		case "mayor":
			$num=$num+(2**$potencia);
			$potencia--;
			$jugada++;
			break;
		case "menor":
			$num=$num-(2**$potencia);
			$potencia--;
			$jugada++;
			break;
		case "igual":
			header("Location:fin.php?jugada=$jugada&max=$max");
			break;	
		default:
			$mensaje="Debes seleccionar un radio";
	}
	if($acertado===false){
		header("Location:fin.php?mensaje=$mensaje");	
	}
}

?>
<!doctype html>
<html lang="es">
  <head>
    <title>Juego Adivina Numero</title>
    <meta charset="utf-8">
  </head>
  <body>
    <label>Empieza el juego</label><br />
    <h1>El numero es <?php echo $num ?>?</h1><br />
    <label><strong>Jugada <?php echo $jugada?></strong></label><br />
    <form action="./jugar.php" method="POST">
      <input type="radio" name="equiv" value="mayor"><label>Mayor</label><br />
      <input type="radio" name="equiv" value="menor"><label>Menor</label><br />
      <input type="radio" name="equiv" value="igual"><label>Igual</label><br />
      <input type="hidden" name="num" value="<?php echo $num?>">
      <input type="hidden" name="jugada" value="<?php echo $jugada?>">
      <input type="hidden" name="max" value="<?php echo $max?>">
      <input type="hidden" name="potencia" value="<?php echo $potencia?>">
      <input type="hidden" name="acertado" value="<?php echo $acertado?>">
      <input type="submit" name="empezar" value="Empezar">
      <input type="submit" name="reiniciar" value="Reiniciar">
      <button type="submit" name="volver" formaction="./index.php">Volver</button>
    </form><br />
    <?php echo $mensaje?>
  </body>
</html>
