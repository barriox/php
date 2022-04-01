<?php
$productos = [
'lechuga' => ['unidades' => 200,
               'precio' => 0.90],
'tomates' =>['unidades' => 2000,
             'precio' => 2.15],
'cebollas' =>['unidades' => 3200,
              'precio' => 0.49],
'fresas' =>['unidades' => 4800,
            'precio' => 4.50],
'manzanas' =>['unidades' => 2500,
              'precio' => 2.10],
];

if(isset($_POST['submit'])){
    $verdura=$_POST['verdura'];
    var_dump($verdura);
    $i=0;
    foreach($productos as $verduritas=>&$valorunidad){
        if($verdura[$i]<$valorunidad){
            $valorunidad['unidades']-=$verdura[$i];
            $precio+=$valorunidad['precio']*$verdura[$i];
        }else{
            $verdura[$i]=0;
            $error="No hay suficientes unidades";
        }
        $i++;
    } 
    
}
var_dump($productos);
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
    <h1>TIENDA VERDURAS</h1>
    <form action="" method="post">
        <label>Lechuga</label>
        <input type="number" name="verdura[]"><br>
        <label>Tomates</label>
        <input type="number" name="verdura[]"><br>
        <label>Cebollas</label>
        <input type="number" name="verdura[]"><br>
        <label>Fresas</label>
        <input type="number" name="verdura[]"><br>
        <label>Manzanas</label>
        <input type="number" name="verdura[]"><br>
        <button type="submit" name="submit">Comprar</button>
    </form>
    <h3>El precio de la compra es <?=$precio?></h3>
</body>
</html>