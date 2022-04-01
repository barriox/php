<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $mensaje=$lan=$mensajes="";
    if(isset($_POST['subidioma'])){
        if(empty($_POST['idioma'])){
            $mensaje="Debes seleccionar un idioma";
        }else{
            $idioma=$_POST['idioma'];
            switch($idioma){
                case "en":
                    header ("Location:./idiomas/ingles.php");
                    break;
                case "fr":
                    header ("Location:./idiomas/frances.php");
                    break;
                case "es":
                    $mensaje="Ya estas en este idioma";
                    break;
            }
        }
    }
    if(isset($_POST['idioma'])){
        $lan=$_POST['idioma'];
    }else{
        $lan="es";
    }
    if(isset($_POST['submited'])){
        if(empty($_POST['name'])){
            $mensajes="Debes rellenar el nombre";
        }else{
            $name=$_POST['name'];
            header("Location:./sitio.php?name=$name&lan=$lan");
        }
    }

?>
<!doctype html>
<html lang="es">
  <head>
    <title>Idiomas</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="" method="POST">
        <label>Ingles</label>
        <input type="radio" name="idioma" value="en"><br />
        <label>Frances</label>
        <input type="radio" name="idioma" value="fr"><br />
        <label>Español</label>
        <input type="radio" name="idioma" value="es" checked><br />
        <input type="submit" name="subidioma" value="Seleccionar Idioma">
    </form>
    <label style="color:red"><?php echo $mensaje?></label>
    <br />    
    <form action="" method="POST">
        <label>Nombre</label>
        <input type="text" name="name">
        <input type="hidden" name="idioma" value="<?php echo $lan?>">
        <input type="submit" name="submited" value="Entrar">
    </form><label style="color:red"><?php echo $mensajes?></label>
    <br />
  </body>
</html>
