<?php
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MASTERMIND</h1>
    <h3>Instrucciones:</h3>
    <p>Para ganar este juego debes acertar una clave secreta de 4 colores generada aleatoriamente. Selecciona en los desplegables el orden de colores hasta acertar la clave. Cada vez que pulses "Empezar de nuevo" el juego se reiniciará y se autogenerará una clave distinta. Si quieres ver la clave actual pulsa en "Mostrar clave"; para ocultarla en "Ocultar". Cada intento mostrara unos rectangulos de color rojo, si has fallado, o verde, si has acertado; en caso de acertar un color pero fallar la posicion se mostrara de color gris.</p>
    <button onclick="location.href='jugar.php'" class="botoncito" type="button">Jugar</button>
</body>
</html>