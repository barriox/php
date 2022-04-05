<?php

class Real extends Operacion
{
    private string $res;
    public function __construct($cadena)
    {
        parent::__construct($cadena);
        $this->operar();
    }
    //opera dependiendo del signo
    protected function operar(){
        switch ($this->op) {
            case "+":
                $this->res = $this->num1 + $this->num2;
                break;
            case "-":
                $this->res = $this->num1 - $this->num2;
                break;
            case "*":
                $this->res = $this->num1 * $this->num2;
                break;
            case ":":
                $this->res = $this->num1 / $this->num2;
                break;
        }
    }
    public function __toString(): string
    {
        return parent::__toString()."<br><h3>Resultado: $this->res</h3>";
    }
}