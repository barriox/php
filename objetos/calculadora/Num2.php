<?php
class Num2
{
    function calcular($operacion, $a, $b)
    {
        switch ($operacion) {
            case "sumar":
                return $a + $b;
            case "restar":
                return $a - $b;
            case "multiplicar":
                return $a * $b;
            case "dividir":
                return $a / $b;
        }
        return false;
    }


    function comprobarNum($a, $b):bool
    {
        if (is_numeric($a) && is_numeric($b)) {
            return true;
        }
        return false;
    }
    public function validar($a):bool{
        if(preg_match("/^[0-9]+(\.[0-9]{1,2}?)?$/",$a) || preg_match("/^[0-9]+\/[0-9]+$/",$a)){
            return true;
        }
        return false;
    }
}?>
