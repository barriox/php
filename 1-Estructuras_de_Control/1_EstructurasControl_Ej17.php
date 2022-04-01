<?php
$mes=rand(1,12);
$dias=0;
$y=date("Y");
if(($mes==1)||($mes==3)||($mes==5)||($mes==7)||($mes==8)||($mes==10)||($mes==12)) {
    $dias = 31;
}else if($mes==2){
    if (($y%4 == 0 && $y%100 != 0) || $y%400 == 0){
        $dias=29;
    }else{
        $dias=28;
    }
}else{
    $dias=30;
}
switch ($mes){
    case 1:
        echo "Numero de mes $mes, estamos en Enero que tiene $dias dias";
        break;
    case 2:
        echo "Numero de mes $mes, estamos en Febrero que tiene $dias dias";
        break;
    case 3:
        echo "Numero de mes $mes, estamos en Marzo que tiene $dias dias";
        break;
    case 4:
        echo "Numero de mes $mes, estamos en Abril que tiene $dias dias";
        break;
    case 5:
        echo "Numero de mes $mes, estamos en Mayo que tiene $dias dias";
        break;
    case 6:
        echo "Numero de mes $mes, estamos en Junio que tiene $dias dias";
        break;
    case 7:
        echo "Numero de mes $mes, estamos en Julio que tiene $dias dias";
        break;
    case 8:
        echo "Numero de mes $mes, estamos en Agosto que tiene $dias dias";
        break;
    case 9:
        echo "Numero de mes $mes, estamos en Septiembre que tiene $dias dias";
        break;
    case 10:
        echo "Numero de mes $mes, estamos en Octubre que tiene $dias dias";
        break;
    case 11:
        echo "Numero de mes $mes, estamos en Noviembre que tiene $dias dias";
        break;
    case 12:
        echo "Numero de mes $mes, estamos en Diciembre que tiene $dias dias";
        break;
    default:
        echo "Fallo en el mes --> $mes";
        break;
}
?>