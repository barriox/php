<?php
$msj="";
spl_autoload_register( function( $clase ) {
    include $clase . '.php';
});
if(isset($_POST['ope'])){
    if($_POST['num_a']!="" && $_POST['num_b']!="") {
        $operacion = $_POST['ope'];
        $num1 = $_POST['num_a'];
        $num2 = $_POST['num_b'];
        $resultado = new Num();
        if ($resultado->validar($num1) && $resultado->validar($num2)){
            if ($resultado->comprobarNum($num1, $num2)) {
                $msj = "Resultado: " . $resultado->calcular($operacion, $num1, $num2);
            }else{
                $separados1=explode("/", $num1);
                $separados2=explode("/", $num2);

                if(is_array($separados1)){
                    if($resultado->comprobarNum($separados1[0],$separados1[1])) {
                        $num1 = $separados1[0] / $separados1[1];
                    }
                }
                if(is_array($separados2)) {
                    if ($resultado->comprobarNum($separados2[0], $separados2[1])) {
                        $num2 = $separados2[0] / $separados2[1];
                    }
                }
                $msj="Resultado: ".$resultado->calcular($operacion, $num1, $num2);
            }
        }else{
            $msj="<p style='color:red'>No es un formato válido</p>";
        }
    }else {
        $msj = "<p style='color:red'>Debes rellenar ambos campos</p>";
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
</head>
<body>
<h2>Calculadora</h2>
<form action="" method="POST">
    <label for="num_a"></label>
    <input type="text" name="num_a" id="num_a">
    <button type="submit" name="ope" value="sumar">+</button>
    <button type="submit" name="ope" value="restar">-</button>
    <button type="submit" name="ope" value="multiplicar">*</button>
    <button type="submit" name="ope" value="dividir">/</button>
    <label for="num_b"></label>
    <input type="text" name="num_b" id="num_b">
</form><br />
<?=$msj?>
</body>
</html>