<!doctype html>
<html lang="es">
  <head>
    <title>Juego Adivina Numero</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Juego adivina número</h1>
    <br />
    <h2>Selecciona un intervalo del menu de abajo</h2>
    <br />
    <form action="jugar.php" method="post">
      <label>Establece intervalo</label><br />
      <input type="radio" name="rango" value="10"><label>1-1.024(2<sup>10</sup>). 10 intentos</label><br />
      <input type="radio" name="rango" value="16"><label>1-65.536(2<sup>16</sup>). 16 intentos</label><br />
      <input type="radio" name="rango" value="20"><label>1-1.048.536(2<sup>20</sup>). 20 intentos</label><br />
      <input type="submit" name="index" value="Empezar">
    </form>
    <br />
    <h2>Piensa un número de ese intervalo</h2>
    <br />
    <h2>La aplicación lo acertara en el número de intentos establecidos segun el intervalo</h2>
    <hr>
    <h2>Cada vez que la aplicación te especifique un número deberás de indicar</h2>
    <p>Si el número buscado es mayor<br />
      Si el úmero buscado es menor<br />
    Si has acertado el número</p>
  </body>
</html>
