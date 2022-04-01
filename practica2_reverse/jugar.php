<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$mensaje=$mensajes="";
$num=$jugada=$max=$respuesta=$recomendado=$contador=$potencia=0;

if(isset($_POST['index']) || isset($_POST['reiniciar'])){

	if(isset($_POST['reiniciar'])){
		$max=filter_input(INPUT_POST, 'max', FILTER_SANITIZE_NUMBER_INT);
	}else{
		$max=filter_input(INPUT_POST, 'rango', FILTER_SANITIZE_NUMBER_INT);
	}
	$jugada=1;
	$num=rand(1,2**$max);
	$potencia=$max-2;
	$recomendado=(2**$max)/2;
}

if(isset($_POST['jugar'])){
	$num=filter_input(INPUT_POST, 'num', FILTER_SANITIZE_NUMBER_INT);
	$jugada=filter_input(INPUT_POST, 'jugada', FILTER_SANITIZE_NUMBER_INT);
	$max=filter_input(INPUT_POST, 'max', FILTER_SANITIZE_NUMBER_INT);
	$respuesta=filter_input(INPUT_POST, 'respuesta', FILTER_SANITIZE_NUMBER_INT);
	$recomendado=filter_input(INPUT_POST, 'recomendado', FILTER_SANITIZE_NUMBER_INT);;
	$contador=filter_input(INPUT_POST, 'contador', FILTER_SANITIZE_NUMBER_INT);;
	$potencia=filter_input(INPUT_POST, 'potencia', FILTER_SANITIZE_NUMBER_INT);;

	function recomienda(&$rec,&$res,&$pot,&$cont,&$men,$caso){
		switch($caso){
			case "suma":
				if($rec!=$res){
					$cont++;
					$men="<p style='color:red'>El número que yo habría utilizado es: ".$rec.". Has utilizado un numero no recomendado ".$cont." veces</p>";
					$rec+=(2**$pot);
					$pot--;
				}else{
					$rec+=(2**$pot);
					$pot--;
				}
				break;
			case "resta":
				if($rec!=$res){
					$cont++;
					$men="<p style='color:red'>El número que yo habría utilizado es: ".$rec.". Has utilizado un numero no recomendado ".$cont." veces</p>";
					$rec-=(2**$pot);
					$pot--;
				}else{
					$rec-=(2**$pot);
					$pot--;
				}
				break;
		}
	}


	if($respuesta==""){
		$mensaje="<p style='color:red'>Debes introducir un número</p>";
	}elseif($max==$jugada){
		$mensaje="<p style='color:red'>Has hecho ".$jugada." intentos. Número máximo de intentos alcanzado</p>";
		header("Location:fin.php?mensaje=$mensaje");
		exit();	
	}elseif($respuesta>(2**$max)||$respuesta<0){
		$mensaje="<p style='color:red'>Introduce un numero dentro del rango, de 1 a ".(2**$max)."</p>";
	}elseif($respuesta>$num){
		$caso="resta";
		$mensaje="El número es menor";
		$jugada++;
		recomienda($recomendado,$respuesta,$potencia,$contador,$mensajes,$caso);
	}elseif($respuesta<$num){
		$caso="suma";
		$mensaje="El número es mayor";
		$jugada++;
		recomienda($recomendado,$respuesta,$potencia,$contador,$mensajes,$caso);
	}else{
		header("Location:fin.php?jugada=$jugada&max=$max");
		exit();	
	}


}
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Juego Adivina Numero</title>
    <meta charset="utf-8">
	<style>
      body{
        margin:5rem;
        text-align:center;
      }
      main{
        border:solid 1px black;
        background: lightblue;
        display:block;
        margin:0;
      }
    </style>
  </head>
  <body>
	  <main>
    <h1>Intenta adivinar el numero</h1><br />
	<?php echo "El numero es: ".$num ?><br />
    <label><strong>Jugada <?php echo $jugada?></strong></label><br />
    <form action="./jugar.php" method="POST">
	  <input type="number" name="respuesta">
      <input type="hidden" name="num" value="<?php echo $num?>">
      <input type="hidden" name="jugada" value="<?php echo $jugada?>">
      <input type="hidden" name="max" value="<?php echo $max?>">
	  <input type="hidden" name="contador" value="<?php echo $contador?>">
      <input type="hidden" name="recomendado" value="<?php echo $recomendado?>">
	  <input type="hidden" name="potencia" value="<?php echo $potencia?>">
      <input type="submit" name="jugar" value="Jugar">
      <input type="submit" name="reiniciar" value="Reiniciar">
      <button type="submit" name="volver" formaction="./index.php">Volver</button>
    </form><br />
    <?php echo $mensaje?><br/>
	<?php echo $mensajes?>
	</main>
  </body>
</html>
