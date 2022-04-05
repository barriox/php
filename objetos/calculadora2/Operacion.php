<?php

abstract class Operacion
{
    protected string $num1;
    protected string $num2;
    protected string $op;
    const RACIONAL=1;
    const REAL=2;
    const ERROR=0;
    abstract protected function operar();

    public function __construct($operacion){
        $this->separar($operacion);
    }
    //separa la cadena $operacion y asigna a cada variable su valor
    protected function separar($operacion){
        $this->op=$this->dameOp($operacion);
        $separado=$this->dameNums($operacion,$this->op);
        $this->num1=$separado[0];
        $this->num2=$separado[1];
    }
    //retorna la operacion estipulada
    protected function dameOp($operacion){
        if (strpos($operacion, "+")) {
            return "+";
        } elseif (strpos($operacion, "-")) {
            return "-";
        } elseif (strpos($operacion, "*")) {
            return "*";
        } elseif (strpos($operacion, ":")) {
            return ":";
        }
    }
    //retorna los 2 números a izquierda y derecha del operador en un array
    protected function dameNums($operacion, $op):array{
        return explode($op, $operacion);
    }

    //valida el formato de la expresión introducida
    static function validame($operacion): int{
        if(preg_match("/(^[0-9]+(\.[0-9]{1,2}?)?[+-:*][0-9]+(\.[0-9]{1,2}?)?$)/", $operacion)){
            return Operacion::REAL;
        }elseif(preg_match("/(^[1-9]+[0-9]*(\/[1-9]+[0-9]*)?[+-:*][1-9]+[0-9]*(\/[1-9]+[0-9]*)?$)/", $operacion)){
            return Operacion::RACIONAL;
        }else{
            return Operacion::ERROR;
        }
    }
    public function __toString(): string
    {
        return "<label class='operation'>Operador: $this->op <br>Numero1:$this->num1<br>Numero2:$this->num2</label>";
    }
}