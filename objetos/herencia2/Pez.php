<?php

class Pez extends Animal
{
    private int $aletas;
    const RAZA="peces";
    public function __construct($nombre,$aletas)
    {
        parent::__construct(self::RAZA,$nombre);
        $this->aletas=$aletas;
    }
    public function hablar():string
    {
        return "Glu Glu";
    }
    public function __toString()
    {
        return parent::__toString() . ", es un pez y tiene $this->aletas aletas";
    }
}