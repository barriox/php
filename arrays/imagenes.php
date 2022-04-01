<?php
$imagenes=["https://image.shutterstock.com/image-photo/young-woman-skateboarder-skateboarding-city-600w-664570948.jpg",
"https://gratisography.com/wp-content/uploads/2019/05/shutterstock-its-not-stock-block-new.jpg",
"https://www.cerotec.net/data/fotos/gratisography.jpg",
"https://cdn.pixabay.com/photo/2019/09/29/20/34/athens-4514311__340.jpg",
"https://cdn.pixabay.com/photo/2019/10/24/18/36/forest-4574893__340.jpg",
"https://cdn.pixabay.com/photo/2015/09/26/13/25/halloween-959049__340.jpg",
"https://cdn.pixabay.com/photo/2019/09/11/09/27/people-4468350__340.jpg",
"https://cdn.pixabay.com/photo/2019/10/23/18/58/malai-4572548__340.jpg",
"https://cdn.pixabay.com/photo/2019/06/25/05/19/waterfall-4297450__340.jpg",
"https://cdn.pixabay.com/photo/2019/10/23/10/47/aesthetic-4571211__340.jpg",
"https://cdn.pixabay.com/photo/2019/10/23/18/32/freudenberg-4572410__340.jpg"];

$tamano=count($imagenes);
do{
    $pos1=rand(0,$tamano-1);
    $pos2=rand(0,$tamano-1);
    $pos3=rand(0,$tamano-1);
}while($pos1==$pos2||$pos1==$pos3||$pos2==$pos3);

$a=array_rand($imagenes, 3);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <h1>IMAGENES</h1>
    <img src="<?=$imagenes[$pos1]?>" width=200 height=200>
    <img src="<?=$imagenes[$pos2]?>" width=200 height=200>
    <img src="<?=$imagenes[$pos3]?>" width=200 height=200>
    <br>
    <h1>IMAGENES ARRAY_RAND</h1>
    <img src="<?=$imagenes[$a[0]]?>" width=200 height=200>
    <img src="<?=$imagenes[$a[1]]?>" width=200 height=200>
    <img src="<?=$imagenes[$a[2]]?>" width=200 height=200>
    
</body>
</html>