<?php
$msj=$nombre="";
$telefono=0;
$agenda=$_POST['names']?? [];
$correcto=false;
if(isset($_POST['submit'])){
    if($_POST['name']!="" && validate($_POST['name'])){
        $nombre=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        if($nombre && is_numeric($_POST['tel'])){
            $telefono=$_POST['tel'];
        }else{
            if(!array_key_exists($nombre, $agenda)){
                $msj="El telefono no puede estar vacio";
            }
        }
        $correcto=true;
    }else{
        $msj="El nombre no puede estar vacio ni contener numeros";
    }
    if(isset($_POST['names']) && $correcto){
        foreach($agenda as $nombres=>$tels){
            if($nombres=$nombre){
                if($telefono!=""){
                    $agenda[$nombres]=$telefono;
                }else{
                    unset($agenda[$nombres]);
                }
            }else{
                $agenda+=[$nombre=>$telefono];
            }
        }
    }else{
        if($nombre && $telefono){
            $agenda=[$nombre=>$telefono];
        }
    }

}

//Validar que el nombre no tenga numeros
function validate($nombre):bool{
    if (preg_match('~[0-9]+~', $nombre)){
        return false;
    }else {
        return true;
    }
}

//borrar todos
if(isset($_POST['borrar'])){
    if(!empty($agenda)){
        unset($agenda);
        $msj="Datos borrados";
    }else{
        $msj="La agenda ya está vacia";
    }
}
var_dump($agenda);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="tel">Telefono</label>
        <input type="number" name="tel" id="tel">
        <button type="submit" name="submit">Añadir contacto</button>
        <button type="submit" name="borrar">Borrar contactos</button>
        <?php
            foreach($agenda as $nombres => $telefonos){
                echo "<input type='hidden' name='names[$nombres]' value='$telefonos'>";
            }
        ?>
    </form>
    <p style="color:red"><?php echo $msj?></p>
</body>
</html>