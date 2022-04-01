<?php

class Programador extends Persona
{
    private string $idioma;
    private string $especialidad;

    public function __construct($nom, $ap, $dir, $edad, $idi,$espec)
    {
        parent::__construct($nom, $ap, $dir, $edad);
        $this->idioma=$idi;
        $this->especialidad=$espec;
    }
    public function programar():string{
        return "Has hecho un programa<br>";
    }
    public function __toString(): string
    {
        return parent::__toString()."<br>Es un ".__CLASS__." con la especialidad de ".$this->especialidad." que sabe programar en ".$this->idioma."<br>";
    }
}