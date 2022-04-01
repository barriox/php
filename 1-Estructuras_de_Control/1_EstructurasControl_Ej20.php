<?php
$dia=rand(1,31);
$mes=rand(1,14);
$y=rand(1,3000);
echo "Fecha aleatoria: $dia-$mes-$y<br />";
if (validaY($y) && validaMesDia($mes,$dia,$y)) {
    echo "<span style='color:green'>FECHA CORRECTA</span>";
}else{
    echo "<span style='color:red'>FECHA INCORRECTA</span>";
}

function validaMesDia($m,$d,$y){
    if ($m>12){
        echo "MES $m INCORRECTO $m <br />";
        return false;
    }
    switch ($m){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            if($d>31){
                echo "DIAS INCORRECTOS, el mes $m deberia tener maximo 31 dias<br />";
            }
            break;
        case 2:
            validaFebrero($d,$y);
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            if($d>30) {
                echo "DIAS INCORRECTOS, el mes $m deberia tener maximo 30 dias<br />";
            }
    }
    return true;
}
function validaFebrero($d,$y){
    if ((($y%4 == 0 && $y%100 != 0) || $y%400 == 0) && !($d<=29)){
        echo "Este febrero  es bisiesto, deberia tener maximo 29 dias<br />";
    }else if($d>28){
        echo "Este febrero no es bisiesto, deberia tener 28 dias<br />";
    }else {
        return true;
    }
    return false;
}
function validaY($y){
    $yactual=date("Y");
    if($y>$yactual){
        echo "Año $y INCORRECTO <br />";
    }else{
        return true;
    }
    return false;
}

?>