<?php
function tirarDados(){
    $jugadas=[];
    for ($i=0;$i<10;$i++){
        $num1=rand(1,6);
        $num2=rand(1,6);
        if($num1==$num2 || ($num1+$num2)<5){
            $datos=array(false, $num1, $num2);
            array_push($jugadas, $datos);
        }else{
            $datos=array(true, $num1, $num2);
            array_push($jugadas, $datos);
        }
    }
    return $jugadas;
}
foreach (tirarDados() as $indice=>$datos){
    foreach($datos as $key=>$dato){
        if($key==0){
            if($dato==0){
                $ganado=true;
            }else{
                $ganado=false;
            }
        }elseif($key==1){
            $num1=$dato;
        }elseif($key==2){
            $num2=$dato;
        }
    }
    if($ganado===true){
        echo "Ha ganado en la jugada $indice con la tirada: $num1 - $num2<br />";
    }else{
        echo "En la jugada $indice ha hecho la tirada: $num1 - $num2<br />";
    }
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

</body>
</html>


