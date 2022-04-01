<?php
$mes=rand(1,12);
switch ($mes){
    case 1:
        echo "Numero de mes $mes, estamos en Enero";
        break;
    case 2:
        echo "Numero de mes $mes, estamos en Febrero";
        break;
    case 3:
        echo "Numero de mes $mes, estamos en Marzo";
        break;
    case 4:
        echo "Numero de mes $mes, estamos en Abril";
        break;
    case 5:
        echo "Numero de mes $mes, estamos en Mayo";
        break;
    case 6:
        echo "Numero de mes $mes, estamos en Junio";
        break;
    case 7:
        echo "Numero de mes $mes, estamos en Julio";
        break;
    case 8:
        echo "Numero de mes $mes, estamos en Agosto";
        break;
    case 9:
        echo "Numero de mes $mes, estamos en Septiembre";
        break;
    case 10:
        echo "Numero de mes $mes, estamos en Octubre";
        break;
    case 11:
        echo "Numero de mes $mes, estamos en Noviembre";
        break;
    case 12:
        echo "Numero de mes $mes, estamos en Diciembre";
        break;
    default:
        echo "Fallo en el mes --> $mes";
        break;
}
?>