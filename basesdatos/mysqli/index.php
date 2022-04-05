<?php
require "bdFile.php";
spl_autoload_register( function( $clase ) {
    include $clase . '.php';
});
$user=$pass="";
$bd=new Database();
if(isset($_POST['submit'])){
    if($_POST['username']!=""){
        $user=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        switch($_POST['submit']){
            case "insert":
                if($pass!="") {
                    $msj=$bd->insert($user,$pass)."<br>";
                }else{
                    $msj="<p style='color:red;'>Debes rellenar el nombre y la contraseña para insertar</p>";
                }
                break;
            case "set":
                $msj=$bd->update($user,$pass)."<br>";
                break;
            case "delete":
                $msj=$bd->delete($user)."<br>";
                break;
        }
    }else{
        $msj="<p style='color:red;'>Debes rellenar el nombre para cualquier accion</p>";
    }
}
if(isset($_POST['update']) || isset($_POST['delete'])){
    if($_POST['update']){
        $datos=explode('--->',$_POST['update']);
        $count=$datos[0];
        $user=$datos[1];
        $pass=$datos[2];
        $select=$bd->edit($count);
    }else{
        $datos=explode('--->',$_POST['delete']);
        $msj=$bd->delete($datos[0])."<br>";
        $select=$bd->select();
    }
}else{
    $select=$bd->select();
}
if(isset($bd)){
    $bd->close();
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
<form action="" method="POST">
    <fieldset>
        <label for="username">Name</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <button type="submit" name="submit" value="insert">Insertar</button>
    </fieldset>
    <?=$select?>
    <input type="hidden" id="hiddenInput" value="<?=$count?>">
</form>
<?=$msj?>
</body>
</html>
