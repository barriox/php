<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);
    $mensaje=$lan=$mensajes="";
    if(isset($_POST['subidioma'])){
        if(empty($_POST['idioma'])){
            $mensaje="Vous devez sélectionner une langue";
        }else{
            $idioma=$_POST['idioma'];
            switch($idioma){
                case "en":
                    header ("Location:./ingles.php");
                    break;
                case "fr":
                    $mensaje="Vous avez déjà sélectionné cette langue";
                    break;
                case "es":
                    header ("Location:../idiomas.php");
                    break;
            }
        }
    }
    if(isset($_POST['idioma'])){
        $lan=$_POST['idioma'];
    }else{
        $lan="fr";
    }
    if(isset($_POST['submited'])){
        if(empty($_POST['name'])){
            $mensajes="Vous devez remplir le nom";
        }else{
            $name=$_POST['name'];
            header("Location:./sitio.php?name=$name&lan=$lan");
        }
    }

?>
<!doctype html>
<html lang="fr">
  <head>
    <title>Langue</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="" method="POST">
        <label>Anglais</label>
        <input type="radio" name="idioma" value="en"><br />
        <label>Français</label>
        <input type="radio" name="idioma" value="fr" checked><br />
        <label>Espagnol</label>
        <input type="radio" name="idioma" value="es"><br />
        <input type="submit" name="subidioma" value="Langue choisir">
    </form>
    <label style="color:red"><?php echo $mensaje?></label>
    <br />
    <form action="" method="POST">
        <label>Nom</label>
        <input type="text" name="name">
        <input type="hidden" name="idioma" value="<?php echo $lan?>">
        <input type="submit" name="submited" value="Montez">
    </form><br />
    <label style="color:red"><?php echo $mensajes?></label>
  </body>
</html>