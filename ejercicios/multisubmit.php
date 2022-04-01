<?php
    if(isset($_POST['submit'])){
        $mensaje=$_POST['submit'];
    }
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Multisubmit</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="./multisubmit.php" method="POST">
        <input type="submit" name="submit" value="Primero">
        <input type="submit" name="submit" value="Segundo">
        <input type="submit" name="submit" value="Tercero">
        <input type="submit" name="submit" value="Cuarto">
        <input type="submit" name="submit" value="Quinto">
        <input type="submit" name="submit" value="Sexto">
    </form><br />
    <?php echo $mensaje?>
  </body>
</html>
