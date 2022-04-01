<!doctype html>
<html lang="es">
  <head>
    <title>Juego Adivina Numero</title>
    <meta charset="utf-8">
    <style>
      body{
        margin:5rem;
        text-align:center;
      }
      main{
        border:solid 1px black;
        background: lightblue;
        display:block;
        margin:0;
      }
    </style>
  </head>
  <body>
    <main>
      <h1>Juego adivina número</h1>
      <br />
      <h2>Selecciona un intervalo del menu de abajo</h2>
      <br />
      <form action="jugar.php" method="post">
        <strong>Establece intervalo: </strong><br />
        <input type="radio" name="rango" value="10"><label>1-1.024(2<sup>10</sup>). 10 intentos</label><br />
        <input type="radio" name="rango" value="16"><label>1-65.536(2<sup>16</sup>). 16 intentos</label><br />
        <input type="radio" name="rango" value="20"><label>1-1.048.536(2<sup>20</sup>). 20 intentos</label><br />
        <input type="submit" name="index" value="Empezar">
      </form>
      <br />
      <h2>El programa pensará un número aleatorio en el rango seleccionado</h2>
      <hr>
      <h2>Trata de acertar el número en menos intentos de los especificados</h2>
      <hr>
      <h2>La aplicación informará si el número es mayor, menor y, en caso de que sea igual, redirigirá a fin.php</h2>
      <hr>
      <h2>Adicionalmente se informará de los números que elegiría la máquina idealmente</h2>
    </main>
  </body>
</html>
