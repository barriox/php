<?php


class Medico extends Persona
{
    private string $especialidad;
    private int $yearTitulacion;

    public function __construct($nom, $ap, $dir, $edad, $espec, $year)
    {
        parent::__construct($nom, $ap, $dir, $edad);
        $this->especialidad = $espec;
        $this->yearTitulacion = $year;
    }
    public function pasarConsulta():string{
        return "Has pasado consulta<br>";
    }
    public function __toString(): string
    {
        return parent::__toString().". Es un ".__CLASS__." con la especialidad de ".$this->especialidad." titulado en el año ".$this->yearTitulacion.".<br>";
    }
}
