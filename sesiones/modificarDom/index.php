<?php
session_start();//Inicio una sesión
$display_formulario = true; //Por defecto se mostrará
$opcion = $_POST['submit'];
switch ($opcion) {
    case "Desconectar":
        session_destroy();
        session_start();
        break;
    case "Conectar":
        $_SESSION['nombre'] = $_POST['nombre'];
        break;
}
//Verifico si estoy conectado
if (isset ($_SESSION['nombre'])) {
    $user = $_SESSION['nombre'];
    $msj = "Estás conectado como $user";
    $display_formulario = false;

} else { //o estoy conectado
    $msj = "Estás desconectado";
    $display_formulario = true;

}

//Genero un mensaje
//Si es la primera conexión de la sesión actual
//=> Es la primera vez que te conectas
//=> y genero un  nombre que guardo en una variable de sesión
//Si no (ya me he conectado antes)
// => mostrará un nombre que previamente he establecido


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= $msj ?>
<form action="index.php" method="POST">
    <?php if ($display_formulario): ?>

        Nombre <input type="text" name="nombre" id="">
        <input type="submit" value="Conectar" name="submit">

    <?php else: ?>
        <input type="submit" value="Desconectar" name="submit">
    <?php endif ?>


</form>
</body>
</html>
