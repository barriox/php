<?php
class Colores {
    private const COLORES=["blue","red","orange","green","purple","yellow","brown","pink"];
    private $clave;
    private $jugadas;
    private $contador;
    public $intento;

    public function __construct(){
        $this->jugadas="";
        $this->contador=0;
        $this->clave=[];
        $this->intento=[];
        $this->secreta();
    }
    public function prueba($a,$b,$c,$d){
         $this->intento=[$a,$b,$c,$d];
        $this->jugadas.="JUGADA".$this->contador.":<br>";
         for ($i=0;$i<count($this->intento);$i++){
             if($this->intento[$i]==$this->clave[$i]){
                 echo "<div class='".$this->intento[$i]." bien'>1</div>";
                 $this->jugadas.="Has acertado en la posicion ".($i+1)." el color: ".$this->intento[$i]."<br>";
             }else{
                 if(in_array($this->intento[$i], $this->clave)){
                     echo "<div class='malo'>0</div>";
                     $this->jugadas.="Has acertado en la posicion ".($i+1)." el color: ".$this->intento[$i]." pero NO la posición<br>";
                 }else{
                     echo "<div class='mal'>0</div>";
                 }
             }
         }
         $this->contador++;
         if($this->intento==$this->clave){
             return true;
         }
        return $this->intento;
    }
    public function secreta(){
        for ($i=0;$i<4;$i++){
            $index=array_rand(SELF::COLORES);
            $this->clave[]=SELF::COLORES[$index];
        }
    }
    public function getJugadas():String{
        return $this->jugadas;
    }
    public function getContador():Int{
        return $this->contador;
    }
    public function mostrar(){
        foreach($this->clave as $num){
            echo "<div style='background:$num'></div>";
        }
    }
}

