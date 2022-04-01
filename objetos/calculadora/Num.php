<?php
class Num
{
    private string $res;
    public function calcular($operacion, $a, $b):string
    {
        switch ($operacion) {
            case "sumar":
                $this->res = $a + $b;
                break;
            case "restar":
                $this->res = $a - $b;
                break;
            case "multiplicar":
                $this->res = $a * $b;
                break;
            case "dividir":
                $this->res = $a / $b;
                break;
        }
        return $this->__toString();
    }
    public function calcularRacional($operacion, $num1,$den1,$num2,$den2):string
    {
        switch ($operacion) {
            case "sumar":
                //$msj=$this->sumar($num1,$den1,$num2,$den2);
                $this->sumar($num1,$den1,$num2,$den2);
                break;
            case "restar":
                //$msj=$this->restar($num1,$den1,$num2,$den2);
                $this->restar($num1,$den1,$num2,$den2);
                break;
            case "multiplicar":
                //$msj=$this->multiplicar($num1,$den1,$num2,$den2);
                $this->multiplicar($num1,$den1,$num2,$den2);
                break;
            case "dividir":
                //$msj=$this->dividir($num1,$den1,$num2,$den2);
                $this->dividir($num1,$den1,$num2,$den2);
                break;
        }
        $this->simplificar();
        return $this->__toString();
    }
    public function simplificar(){
        $fraccion=explode("/",$this->res);
        if($fraccion[0]==$fraccion[1]){
            $this->res=1;
        }elseif($fraccion[1]==1) {
            $this->res=$fraccion[0];
        }else{
            $mcd= $this->mcd((int)$fraccion[0], (int)$fraccion[1]);
            $fraccion[0]/=$mcd;
            $fraccion[1]/=$mcd;
            $num="$fraccion[0]/$fraccion[1]";
            $this->res=$num;
        }
    }
    public function mcd($a,$b) {
        return ($a % $b) ? $this->mcd($b,$a % $b) : $b;
    }
    public function sumar($num1,$den1,$num2,$den2){
        if($den1==$den2){
            $num=$num1+$num2;
            $this->res="$num/$den1";
        }else{
            $num=($num1*$den2)+($num2*$den1);
            $den=$den1*$den2;
            $this->res="$num/$den";
        }
    }
    public function restar($num1,$den1,$num2,$den2){
        if($den1==$den2){
            $num=$num1-$num2;
            $this->res="$num/$den1";
        }else{
            $num=($num1*$den2)-($num2*$den1);
            $den=$den1*$den2;
            $this->res="$num/$den";
        }
    }

    public function multiplicar($num1,$den1,$num2,$den2){
        $num=$num1*$den1;
        $den=$num2*$den2;
        $this->res="$num/$den";
    }

    public function dividir($num1,$den1,$num2,$den2){
        $num=$num1*$den2;
        $den=$num2*$den1;
        $this->res="$num/$den";
    }
    function comprobarNum($a, $b):bool
    {
        if (is_numeric($a) && is_numeric($b)) {
            return true;
        }
        return false;
    }
    public function validar($a):bool{
        if(preg_match("/^[0-9]+(\.[0-9]{1,2}?)?$/",$a) || preg_match("/^[1-9]+\/[1-9]+$/",$a)){
            return true;
        }
        return false;
    }
    public function __toString(){
        return "Resultado: ".$this->res;
    }
}
