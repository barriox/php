<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
//Defino dos variables con mi nombre y apellidos
 $nom="Miguel";
 $ape="Barrio";

//Visualizo el texto con echo y print, por ejemplo en mi caso (deben de aparecer las comillas del ejemplo
// mi nombre es "Manuel" y mi apellido es "Romero"
//1)con echo pasando varios argumentos (separadados por coma)
echo 'Mi nombre es "',$nom,'" y mi apellido es "',$ape,'"';
 
//2)con print
echo "<hr>";
print "Mi nombre es \"$nom\" y mi apellido es \"$ape\"";
 
//3,4 y 5)Explica en el fichero diferencias entre echo y print y semejanzas.
echo "<hr>";
 $texto=<<<FIN
 Tanto echo como print son constructores del lenguaje, no funciones, por lo que permiten su uso sin necesidad de especificar paréntesis. Mientras que print puede unicamente imprimir una cadena, echo es capaz de imprimir varias separadas por comas. Print devuelve un valor entero 1 al ejecutarse mientras que echo es de tipo void, esto permite que print pueda ser utilizado en expresiones a diferencia de echo.
 FIN;
 echo $texto;
//6) Indica Por qué puedes pasar los argumentos sin usar paréntesis
echo "<hr>";
 echo "No tienen por qué tener paréntesis porque no son funciones";
 
/*7) Sintaxis heredoc,*/
//Asigna a una variable llamada informe un texto de cinco líneas,
//la etiqueta de finalización es FIN
//Posteriormente visualizas el texto
// El contenido de 'informe' es:
//   ........
// aquí aparecer el contenido del informe
// debe de respetarse el número de 5 líneas asignadas previamente";
//Tener cuidado con que la etiqueta no lleve en esa línea ningún otro carácter (espacios en blanco o tabulacones)
echo "<hr>";
$informe=<<<FIN
<pre>
........
// aquí aparecer el contenido del informe
// debe de respetarse el número de 5 líneas asignadas previamente";
//Tener cuidado con que la etiqueta no lleve en esa línea ningún otro carácter 
(espacios en blanco o tabulacones)</pre>
FIN;
echo $informe;

/*PROBANDO VARIABLES (del 8 al 19)*/
//Crea una variable y asígnale un valor
echo "<hr>";
 $a=8;
//visualiza el valor de la variable y el tipo que eś
echo "\$a=$a es de tipo ".gettype($a)."<br>";
//Cambia la variable a los siguientes tipos :boolean, float, string y null,  y visualizar su valor y tipo 
$a=true;
echo "\$a=$a es de tipo ".gettype($a)."<br>";
$a=5.2;
echo "\$a=$a es de tipo ".gettype($a)."<br>";
$a="Hola";
echo "\$a=$a es de tipo ".gettype($a)."<br>";
$a=null;
echo "\$a=$a es de tipo ".gettype($a)."<br>";
 
//Prueba a ver el valor y tipo de una variable no definida previamente
 echo gettype($b)."<br>";
 
 
/* 20)Visualiza el código ascii del valor 64 al 122 en carácter usando la función ascii  .. puedes usar la función printf o  bien char() ..*/
echo "<hr>";
echo "Valores ASCII: ";
 for($i=64;$i<122;$i++){
 	echo chr($i)."\n";
 }
 
//21)Visualiza el contenido de la función time() y explica su valor
echo "<hr>";
 echo time()."<br>";
 echo "La funcion time() nos devuelve el número de segundos transcurridos desde la fecha Unix, el 1 de enero de 1970<br>";
//22)Obtén la fecha actual y visualiza su valor con formato dia-mes-año en número usa la función date() para ello
echo "<hr>";
 echo date("d-m-Y");
 
//23,24,y 25)Obtener los días, luego horas y luego minutos transcurridos desde el 1/1/1970 (round() o floor() para redondear
echo "<hr>";
 $min=time()/60;
 $hor=time()/(60*60);
 $dia=time()/(60*60*24);
 echo "Minutos: $min Horas: $hor Días: $dia<br>";
//Usando la función setlocale(...) y strftime(...)
//Puede ser que tengas que habilitar el idioma en el sistema con locale-gen
//26)  Obtén la fecha actual con formato por ejemplo domingo, 28 de octubre de 2018
//27)  Ahora con formato en inglés  Sunday, 28 October 2018
//28) y con formato en francés  dimanche, 28 octobre 2018
echo "<hr>";
echo "EN ESPAÑOL: ";
setlocale(LC_TIME, "es_ES.utf8");
echo strftime("%A, %e de %B de %Y<br />");
echo "EN FRANCES: ";
setlocale(LC_TIME, "fr_FR.utf8");
echo strftime("%A, %e %B %Y<br />");
echo "EN INGLES: ";
setlocale(LC_TIME, "en_US.utf8");
echo strftime("%A, %e %B %Y<br />");
 
// 29-30)Asigna a una variable la fecha de tu cumpleaños
// Realiza una operación y obtén tu edad en años, meses y días (valor entero).
// tienes 23 años, 10 meses y 4 días
echo "<hr>";
$fecha="10-02-1998";
$date=date_create_from_format("d-m-Y", $fecha);
$actual=date_create_from_format("d-m-Y", date("d-m-Y"));
$intervalo=$actual-$date;
$diff=(array) date_diff($actual, $date);
echo "Tengo ".$diff['y']." años, ".$diff['m']." meses y ".$diff['d']." días<br>";

 
//31-32)Asigna a una variable una fecha de 30/10/1969 (mira las funciones strtotime() o bien mktime() para ello
// Obtén su edad en años, en meses y luego en días siempre redondeando
// tienes xx años
// tienes xx meses
// tienes xx días
echo "<hr>";
$fecha="30/10/1969";
$date=date_create_from_format("d/m/Y", $fecha);
$actual=date_create_from_format("d-m-Y", date("d-m-Y"));
$diff=(array) date_diff($actual, $date);
echo "Tienes ".$diff['y']." años<br>";
echo "Tienes ".$diff['m']." meses<br>";
echo "Tienes ".$diff['d']." días<br>";
 
//33-36). Usa la función getdate(...) y visualiza con la función print_r(.) el valor que retorna, comenta el resultado
//. Si escribo getdate(1) podrías explicar el contenido del array que nos retorna
//. Obtener la edad de una persona nacida el 1/1/1969
echo "<hr>";
print_r(getdate());
echo "<br>";
print_r(getdate(1));
echo "<br> La función getdate(1) nos devuelve un array asociativo de la marca de tiempo 1 segundo después de la fecha Unix (01-01-1970)";
echo "<br>";
$fecha="1/1/1969";
$date=date_create_from_format("d/m/Y", $fecha);
$actual=date_create_from_format("d-m-Y", date("d-m-Y"));
$diff=(array) date_diff($actual, $date);
echo "Tienes ".$diff['y']." años, ".$diff['m']." meses y ".$diff['d']." días<br>";

//37-64)Explica el siguiente código observando el resultado que se produce fuente obtenido en parte de http://php.net/manual/es/function.strtotime.php
echo "<hr>";
echo "Muestra la fecha Unix actual, equivalente a time():";
echo strtotime("now"), "<br/>";
echo "Convierte a una fecha con el formato especificado la fecha actual: ";
echo date('d-m-Y', strtotime("now")), "<br/>";
echo "Convierte a una marca de tiempo Unix el string '27 September 1970': ";
echo strtotime("27 September 1970"), "<br/>";
echo "Convierte a una fecha con el formato especificado el string '10 September 2000': ";
echo date('d-m-Y',strtotime("10 September 2000")), "<br/>";
echo "Convierte a una marca de tiempo Unix la fecha actual sumandole un día completo: ";
echo strtotime("+1 day"), "<br/>";
echo "Convierte a una fecha con el formato especificado la fecha actual sumandole un día completo: ";
echo date('d-m-Y',strtotime("+1 day")), "<br/>";
echo "Convierte a una marca de tiempo Unix la fecha actual sumandole una semana completa: ";
echo strtotime("+1 week"), "<br/>";
echo "Convierte a una fecha con el formato especificado la fecha actual sumandole una semana entera: ";
echo date('d-m-Y',strtotime("+1 week")), "<br/>";
echo "Convierte a una marca de tiempo Unix la fecha actual sumandole 1 semana, 2 días, 4 horas y 2 segundos: ";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br/>";
echo "Convierte a una fecha con el formato especificado la fecha actual umandole 1 semana, 2 días, 4 horas y 2 segundos: ";
echo date('d-m-Y',strtotime("+1 week 2 days 4 hours 2 seconds")), "<br/>";
echo "Convierte a una marca de tiempo Unix la fecha que tendrá el próximo jueves: ";
echo strtotime("next Thursday"), "<br/>";
echo "Convierte a una fecha con el formato especificado la fecha que tendrá el próximo jueves: ";
echo date('d-m-Y',strtotime("next Thursday")), "<br/>";
echo "Convierte a una marca de tiempo Unix la fecha que tuvo el anterior lunes: ";
echo strtotime("last Monday"), "<br/>";
echo "Convierte a una fecha con el formato especificado la fecha que tuvo el anterior lunes: ";
echo date('d-m-Y',strtotime("last Monday")), "<br/>";
echo "<hr>";

?>
 <button><a href="../index.html">Volver al index</a></button><br>
</body>
</html>
