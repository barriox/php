<?php

abstract class Animal
{
    private string $reino;
    private string $nombre;

    public function __construct($reino,$nombre){
        $this->reino=$reino;
        $this->nombre=$nombre;
    }

    public function comer():string{
        return "ñam, ñam, que bueno";
    }

    public abstract function hablar();

    public function __toString(){
        return $this->nombre." es un animal del reino ".$this->reino;
    }
}
