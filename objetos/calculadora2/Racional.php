<?php

class Racional extends Operacion
{
    private string $res;

    public function __construct($operacion){
        parent::__construct($operacion);
        $this->operar();
    }

    //prepara los números para operar con ellos de forma correcta, opera y los simplifica
    protected function operar(){
        $separados1=explode("/",$this->num1);
        $separados2=explode("/",$this->num2);
        $separados1=$this->natural($separados1);
        $separados2=$this->natural($separados2);
        $this->operacion($separados1,$separados2);
        $this->simplificar();
    }

    //ejecuta la operación necesaria
    protected function operacion($separados1,$separados2){
        switch ($this->op) {
            case "+":
                $this->sumar($separados1[0],$separados1[1],$separados2[0],$separados2[1]);
                break;
            case "-":
                $this->restar($separados1[0],$separados1[1],$separados2[0],$separados2[1]);
                break;
            case "*":
                $this->multiplicar($separados1[0],$separados1[1],$separados2[0],$separados2[1]);
                break;
            case ":":
                $this->dividir($separados1[0],$separados1[1],$separados2[0],$separados2[1]);
                break;
        }
    }
    //convierte numeros naturales en fracciones (2--->2/1) para poder operar correctamente
    protected function natural($fraccion):array{
        if(count($fraccion)==1){
                $fraccion[1]="1";
        }
        return $fraccion;
    }

    protected function sumar($num1,$den1,$num2,$den2){
        if($den1==$den2){
            $num=$num1+$num2;
            $this->res="$num/$den1";
        }else{
            $num=($num1*$den2)+($num2*$den1);
            $den=$den1*$den2;
            $this->res="$num/$den";
        }
    }
    protected function restar($num1,$den1,$num2,$den2){
        if($den1==$den2){
            $num=$num1-$num2;
            $this->res="$num/$den1";
        }else{
            $num=($num1*$den2)-($num2*$den1);
            $den=$den1*$den2;
            $this->res="$num/$den";
        }
    }

    protected function multiplicar($num1,$den1,$num2,$den2){
        $num=$num1*$num2;
        $den=$den1*$den2;
        $this->res="$num/$den";
    }

    protected function dividir($num1,$den1,$num2,$den2){
        $num=$num1*$den2;
        $den=$num2*$den1;
        $this->res="$num/$den";
    }

    //máximo común divisor para proceder a simplificar
    protected function mcd($a,$b) {
        return ($a % $b) ? $this->mcd($b,$a % $b) : $b;
    }

    //simplifica fracciones
    protected function simplificar(){
        $fraccion=explode("/",$this->res);
        if($fraccion[0]==$fraccion[1]){
            $this->res=1;
        }elseif($fraccion[1]==1) {
            $this->res=$fraccion[0];
        }else{
            $mcd= $this->mcd((int)$fraccion[0], (int)$fraccion[1]);
            $fraccion[0]/=$mcd;
            $fraccion[1]/=$mcd;
            if($fraccion[1]==1) {
                $num="$fraccion[0]";
            }else{
                $num="$fraccion[0]/$fraccion[1]";
            }
            $this->res=$num;
        }
        $this->negativo();
    }

    //si el resultado es negativo, el signo lo coloco al principio de la expresion
    protected function negativo(){
        if(strpos($this->res,"-")){
            $this->res=str_replace("-","",$this->res);
            $this->res= "-".$this->res;
        }
    }

    public function __toString():string{
        return parent::__toString()."<br><h3>Resultado: $this->res</h3>";
    }
}