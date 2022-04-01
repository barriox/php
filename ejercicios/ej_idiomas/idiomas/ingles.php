<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);
    $mensaje=$lan=$mensajes="";
    if(isset($_POST['subidioma'])){
        if(empty($_POST['idioma'])){
            $mensaje="You must select a language";
        }else{
            $idioma=$_POST['idioma'];
            switch($idioma){
                case "en":
                    $mensaje="You already selected this language";
                    break;
                case "fr":
                    header ("Location:./frances.php");
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
        $lan="en";
    }
    if(isset($_POST['submited'])){
        if(empty($_POST['name'])){
            $mensajes="You must fill the name";
        }else{
            $name=$_POST['name'];
            header("Location:./sitio.php?name=$name&lan=$lan");
        }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Language</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="" method="POST">
        <label>English</label>
        <input type="radio" name="idioma" value="en" checked><br />
        <label>French</label>
        <input type="radio" name="idioma" value="fr"><br />
        <label>Spanish</label>
        <input type="radio" name="idioma" value="es"><br />
        <input type="submit" name="subidioma" value="Select language">
    </form>
    <label style="color:red"><?php echo $mensaje?></label>
    <br />
    <form action="" method="POST">
        <label>Name</label>
        <input type="text" name="name">
        <input type="hidden" name="idioma" value="<?php echo $lan?>">
        <input type="submit" name="submited" value="Enter">
    </form><br />
    <label style="color:red"><?php echo $mensajes?></label>
  </body>
</html>