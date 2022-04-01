<?php
for($i=0;$i<10;$i++){
    $notas[]=rand(1,10);
}
var_dump($notas);

$notas2=array_fill(0,10,0);
$notas2=array_map(ran, $notas2);
var_dump($notas2);

$notas3 = range(0, 10);
shuffle($notas3);
$notas3 = array_slice($notas3 ,0,10);
var_dump($notas3);

function ran(){
    return rand(0,10);
}

$capitales=['españa'=>'madrid','francia'=>'paris','alemania'=>'berlin','inglaterra'=>'londres'];
$capitales+=['grecia'=>'atenas', 'italia'=>'roma'];
foreach($capitales as $pais=>$capital){
    echo $capital." capital de ".$pais."<br>";
}

$clicks=$_POST['click']?? [];
if(isset($_POST['submit'])){
    $nombre=$_POST['nombre'];
    $clicks[$nombre]++;
}
var_dump($clicks);
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
    <h1>Identificate y contaremos tus clicks</h1>
    <form action="" method="POST">
        <input type="text" name="nombre">
        <?php
            foreach($clicks as $index=>$click){
                echo "<input type='hidden' name='click[$index]' value='$click'>";
            }
        ?>
        <button type="submit" name="submit">Entrar</button>
    </form>
</body>
</html>