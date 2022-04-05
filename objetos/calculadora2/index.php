<?php
$msj=$op=$num1=$num2="";
spl_autoload_register( function( $clase ) {
    include $clase . '.php';
});
if(isset($_POST['submit'])){
    if($_POST['operacion']!="") {
        $operacion = $_POST['operacion'];
        switch (Operacion::validame($operacion)) {
            case Operacion::RACIONAL:
                $obj1 = new Racional($operacion);
                $msj = $obj1->__toString();
                break;
            case Operacion::REAL:
                $obj1 = new Real($operacion);
                $msj = $obj1->__toString();
                break;
            case Operacion::ERROR:  //si el formato de la operación no es correcto
                $msj = "<p style='color:red'>Error en la operación</p>";
                break;
        }

    }else{  //si no se ha rellenado el campo
        $msj = "<p style='color:red'>Debes rellenar el campo</p>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/PermanentMarker-Regular.ttf">
</head>
<body>
<main>
    <div class="calculadora">
        <h2>Calculadora</h2>
        <form action="" method="POST">
            <label for="num_a"></label>
            <input type="text" name="operacion" id="num_a">
            <button type="submit" name="submit">Calcular</button>
        </form><br />
    </div>
    <div class="resultado">
        <?=$msj?>
    </div>
</main>
</body>
</html>
