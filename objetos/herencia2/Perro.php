<?php

class Perro extends Animal
{
    private int $patas;
    const RAZA="caninos";
    public function __construct($nombre,$patas){
        parent::__construct(self::RAZA,$nombre);
        $this->patas=$patas;
    }
    public function hablar():string{
        return "Guau guau";
    }
    public function __toString(){
        return parent::__toString().", es un perro y tiene $this->patas patas";
    }
}