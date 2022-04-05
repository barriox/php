<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
  </head>
  <body>
    <form action="valida.php" method="POST" name="myForm">
      <fieldset>
        <legend>Información Personal Obligatoria</legend>
        <label for="f_name">Nombre:</label>
        <input type="text" name="f_name" id="f_name" tabindex="1" />
        <label for="l_name">Apellidos:</label>
        <input type="text" name="l_name" id="l_name" tabindex="2" />
        <label for="dir">Dirección:</label>
        <input type="text" name="dir" id="dir" tabindex="3" />
        <label for="age">Edad:</label>
        <input type="text" name="age" id="age" tabindex="4" />
        <label for="medicos">Medicos:</label>
        <input
          type="radio"
          name="prof"
          class="radio"
          value="medicos"
          id="medicos"
        />
        <label for="programadores">Programadores:</label>
        <input
          type="radio"
          name="prof"
          class="radio"
          value="programadores"
          id="programadores"
        />
      </fieldset>
      <fieldset class="meds" disabled>
        <legend>Medicos</legend>
        <label for="year">Año titulacion:</label>
        <input type="text" name="year" id="year" tabindex="5" />
        <label for="spec">Especialidad:</label>
        <input type="text" name="spec" id="spec" tabindex="6" />
      </fieldset>
      <fieldset class="progs" disabled>
        <legend>Programadores</legend>
        <label for="lan">Idioma:</label>
        <input type="text" name="lan" id="lan" tabindex="7" />
        <label for="job">Puesto:</label>
        <input type="text" name="job" id="job" tabindex="8" />
      </fieldset>
      <button type="submit" name="submit">Agregar</button>
    </form>
    <script src="script.js"></script>
  </body>
</html>
