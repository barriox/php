<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    if(isset($_POST['submit'])){
        $clicks=$_POST['clicks'];
        $clicks++;
    }else{
      $clicks=0;
    }
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Cuenta Clicks</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="./clicks.php" method="POST">
        <input type="hidden" name="clicks" value="<?php echo $clicks?>">
        <input type="submit" name="submit" value="Presioname!">
    </form><br />
    <?php echo "Llevas ".$clicks." clicks"?>
  </body>
</html>
