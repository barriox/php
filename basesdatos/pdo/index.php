<?php
$conexion = new PDO("mysql:host=localhost;dbname=employees", "alumno", "password");
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
   $resultado = $conexion->query("SELECT dept_no, dept_name FROM departments");
   if ($resultado->num_rows > 0) {
       while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
           echo "Departamento " . $registro->dept_no . ": " . $registro->dept_name . "<br />";
       }
       /*while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
           echo "Departamento " . $registro['dept_no'] . ": " . $registro['dept_name'] . "<br />";
       }*/
   }else{
       echo "0 resultados";
   }
    $consulta = $conexion->prepare('INSERT INTO departments (dept_no, dept_name) VALUES (:dept_no, :dept_name)');
    $num_departamento = "119";
    $nombre_departamento = "Ventas";
    $consulta->bindParam(":dept_no", $num_departamento, );
    $consulta->bindParam(":dept_name", $nombre_departamento);
    $consulta->execute();

    /*$parametros = array(":dept_no" => "121", ":dept_name" => "Sucursales PC");
    $consulta->execute($parametros);*/
}
catch (PDOException $p) {
    echo "Error ".$p->getMessage()."<br />";
}
$conexion=null;
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

</body>
</html>
