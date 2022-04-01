<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);
    
    $mensaje=$volver="";
    if(isset($_GET['name'])){
      $idioma=$_GET['lan'];
      $nombre=$_GET['name'];
      switch($idioma){
        case "es":
          $mensaje="Bienvenido al sitio ".$nombre;
          $volver="<a href='./idiomas.php'>Volver al index</a>";
          break;
        case "en":
          $mensaje="Welcome to the site ".$nombre;
          $volver="<a href='./idiomas/ingles.php'>Go back to index</a>";
          break;
        case "fr":
          $mensaje="Bienvenue sur le site ".$nombre;
          $volver="<a href='./idiomas/frances.php'>Retourner à l'index</a>";
          break;

        }
    }
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Sitio</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1><?php echo $mensaje?></h1>
    <?php echo $volver?>

  </body>
</html>
