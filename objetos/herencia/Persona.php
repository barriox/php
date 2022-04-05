<?php

use Cassandra\Date;

class Persona
{
    protected string $nombre;
    protected string $apellido;
    protected string $direccion;
    protected int $edad;

    public function __construct($nom,$ap,$dir,$edad){
        $this->nombre=$nom;
        $this->apellido=$ap;
        $this->direccion=$dir;
        $this->edad=$edad;
    }
    public function fecha(){
        $d = date("d-m-Y");
        return "Hoy es el ".$d."<br>";
    }

    public function __toString(): string
    {
        return "<br>La persona ".$this->nombre." ".$this->apellido." tiene ".$this->edad." años y vive en la direccion: ".$this->direccion;
    }
}