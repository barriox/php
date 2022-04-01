
<?php
$edad=10;
echo "el valor de la variable \$edad es $edad<br>";
$numoctal=032;
$numhexa=0x6FA;
$numbin=0b101011;
echo "el valor de \$numoctal es $numoctal<br>";
echo "el valor de \$numhexa es $numhexa<br>";
echo "el valor de \$numbin es $numbin<br>";
printf("decimal %d, hexa %x, caracter %c, binario, %b",$edad,$edad,$edad,$edad);

echo"<br><hr><strong>Visualizar array</strong><br>";
$array=[1,2,3,4,5];
echo "Visualizo una variable \$array $array, no deja entre caracteres<br>";
echo "Visualizo una variable \$array ". $array. ", no deja asi tampoco<br>";
echo "Visualizo con printr: ";
print_r($array);
echo "<br>Visualizo con var_dump: ";
var_dump($array);


echo"<br><hr><strong>Uso de Heredoc y Newdoc</strong><br>";
$frase=<<<END
<pre>
Esto es una frase larga
en la que escribo lo \n\n
que deseo \n \$edad=$edad
en esta se interpretan 
los caracteres especiales
ni variables
</pre>
END;
echo "\$frase = $frase";
$frase=<<<'END'
<pre>
Esto es una frase larga
en la que escribo lo 
que deseo $edad \n
en esta NO se interpretan 
los caracteres especiales
ni variables
</pre>
END;
echo "\$frase = $frase";

echo"<br><hr><strong>Declaracion de constantes</strong><br>";
const IVA=0.21;
$precio=300;
$total=$precio+(IVA*$precio);
echo "El \$precio es $precio, el IVA es ".IVA.", el precio total es de $total";

echo"<br><hr><strong>Probando funciones de string</strong><br>";
$string="hola mundo";
$num=42;
echo chr($num)."<br>";//imprime el caracter asociado a la posicion $num en el codigo ascii
echo ord($string)."<br>";//convierte el primer byte de un string en un numero entre 0 y 255
echo substr($string,1,5)."<br>";//corta un string
echo md5($string)."<br>"; //codificacion md5
echo ucfirst($string)."<br>";//primer caracter en mayusculas
echo strtolower($string)."<br>";//string en minusculas
echo strtoupper($string)."<br>";//string en mayuscylas
echo ucwords($string)."<br>";//primer caracter de cada palabra del string en mayusculas
echo trim($string, " hmo")."<br>";//elimina los caracteres especificados
echo ltrim($string)."<br>";//elimina espacios en blanco al principio de un string
echo rtrim($string)."<br>";//elimina espacios en blanco al final de un string

echo"<br><hr><strong>Estructuras de control con IF</strong><br>";
$a=rand(0,10);
echo "LA NOTA ES $a, un ";
if($a<5){
    echo "INSUFICIENTE";
}else if($a>=5 && $a<7){
    echo "BIEN";
}else if($a>=7 && $a<9) {
    echo "NOTABLE";
}else{
    echo "SOBRESALIENTE";
}

echo"<br><hr><strong>Ejercicio lechugas</strong><br>";
$nume=rand(1,5);
$pro="lechuga";
if($nume==1){
    echo "tengo $nume $pro";
}else{
    echo "tengo $nume {$pro}s";
}

echo"<br><hr><strong>Ejercicio lechugas</strong><br>";
$num=rand(1,50);
if($num%2==0)
    echo "$num es par<br>";
else
    echo "$num es impar<br>";

if($num%2)
    echo "$num es impar";
else
    echo "$num es par";

echo"<br><hr><strong>Ejercicio switch</strong><br>";
$nota=rand(0,100)/10;
echo "<h1>Switch con decimales (rangos)</h1>";
echo "Nota: $nota <br /> El alumno ha obtenido un: ";
switch (true){
    case ($nota>=0) && ($nota<=3):
        echo "Deficiente";
        break;
    case ($nota>3) && ($nota<5):
        echo "Insuficiente";
        break;
    case $nota==5:
        echo "Suficiente";
        break;
    case ($nota>5) && ($nota<7):
        echo "Bien";
        break;
    case ($nota>=7) && ($nota<9):
        echo "Notable";
        break;
    case ($nota>=9) && ($nota<=10):
        echo "Sobresaliente";
        break;
}
echo "<h1>Switch con enteros</h1>";
$nota=rand(1,10);
echo "Nota: $nota <br /> El alumno ha obtenido un: ";
switch ($nota){
    case 1:
    case 2:
    case 3:
        echo "Deficiente";
        break;
    case 4:
        echo "Insuficiente";
        break;
    case 5:
        echo "Suficiente";
        break;
    case 6:
        echo "Bien";
        break;
    case 7:
    case 8:
        echo "Notable";
        break;
    case 9:
    case 10:
        echo "Sobresaliente";
        break;
}
$edad=rand(0,120);
echo "<h1>Switch edades</h1>";
echo "Edad: $edad, \n es un ";
switch (true){
    case ($edad>=0) && ($edad<=3):
        echo "bebe";
        break;
    case ($edad>4) && ($edad<=11):
        echo "niño";
        break;
    case ($edad>11) && ($edad<18):
        echo "adolescente";
        break;
    case ($edad>=18) && ($edad<=30):
        echo "joven";
        break;
    case ($edad>30) && ($edad<=60):
        echo "mayor";
        break;
    case ($edad>60):
        echo "viejo";
        break;
}

echo"<br><hr><strong>Suma 100 primeros numeros pares</strong><br>";
$num=0;
$contador=0;
do{
    if ($num%2==0){
        $contador+=$num;
        echo "$contador \n";
    }
    $num++;
}while($num<100);

echo"<br><hr><strong>Suma 100 primeros numeros pares</strong><br>";
$contador=0;
for ($i=0;$i<100;$i++){
    if ($i%2==0){
        $contador+=$i;
        echo "$contador \n";
    }
}
?>
