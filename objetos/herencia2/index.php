<?php
spl_autoload_register( function( $clase ) {
    include $clase . '.php';
});

$perro=new Perro("Pancho",4);
$pez=new Pez("Nemo", 3);
$pato=new Pato("Quoki",2);

echo $perro->comer()."<br>";
echo $perro->hablar()."<br>";
echo $pez->comer()."<br>";
echo $pez->hablar()."<br>";
echo $pato->comer()."<br>";
echo $pato->hablar()."<br>";
echo $perro."<br>";
echo $pez."<br>";
echo $pato."<br>";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
