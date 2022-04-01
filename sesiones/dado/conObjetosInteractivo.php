<?php
class Dado{
    static public function tirarDados(){
            $num1=rand(1,6);
            $num2=rand(1,6);
            if($num1==$num2 || ($num1+$num2)<5){
                $jugadas[]=array(false, $num1, $num2);
            }else{
                $jugadas[]=array(true, $num1, $num2);
            }
        return $jugadas;
    }
}

session_start();
$jugar=new Dado();
if(count($_SESSION['nuevasesion'])<10){
    if(isset($_POST['submit'])){
        $registro = $jugar->tirarDados();
        $_SESSION['nuevasesion'][] = $registro;

    }
}else{
    $msj= "<p style='color:red'>Se ha hecho el máximo número de tiradas</p>";
}
foreach ($_SESSION['nuevasesion'] as $indice=>$index){
    foreach($index as $datos) {
        foreach ($datos as $key => $dato) {
            if ($key == 0) {
                if ($dato == 0) {
                    $ganado = true;
                } else {
                    $ganado = false;
                }
            } elseif ($key == 1) {
                $num1 = $dato;
            } elseif ($key == 2) {
                $num2 = $dato;
            }
        }
    }
    if($ganado===true){
        echo "Ha ganado en la jugada $indice con la tirada: $num1 - $num2<br />";
    }else{
        echo "En la jugada $indice ha hecho la tirada: $num1 - $num2<br />";
    }
}
if(isset($_POST['borrar'])){
    session_unset();
    session_destroy();
    header("Location:conObjetosInteractivo.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Presiona Jugar para comenzar a lanzar dados.</h1>
<form action="" method="POST">
    <?=$msj?>
    <button type="submit" name="submit">Jugar</button>
    <button type="submit" name="borrar">Borrar</button>
</form>
</body>
</html>
