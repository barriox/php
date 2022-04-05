<?php

class Pato extends Animal
{
    private int $alas;
    private const RAZA="aves";
    public function __construct($nombre,$alas)
    {
        parent::__construct(self::RAZA,$nombre);
        $this->alas=$alas;
    }
    public function hablar():string
    {
        return "Cuack cuack";
    }
    public function __toString()
    {
        return parent::__toString() . " y es un ave con $this->alas";
    }
}