<?php
require "bdFile.php";
spl_autoload_register( function( $clase ) {
    include $clase . '.php';
});
$user=$pass="";
$bd=new Database();
if(isset($_POST['insert'])){
    if($_POST['username']!="" && $_POST['password']!=""){
        $user=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $msj=$bd->insert($user,$pass);
    }else{
        $msj="<p style='color:red;'>Debes rellenar el nombre y la contraseña para insertar</p>";
    }
}
if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $msj=$bd->delete($id)."<br>";
    $select=$bd->select();
}
if(isset($_POST['update'])){
    $id=$_POST['update'];
    $select=$bd->edit($id);
}
if(isset($_POST['set_update'])){
    $id=$_POST['set_update'];
    if($_POST['username']!="" && $_POST['password']!=""){
        $newuser=$_POST['newuser'];
        $newpass=$_POST['newpass'];
        $msj=$bd->update($id,$newuser,$newpass)."<br>";
    }else{
        $msj="<p style='color:red;'>Debes rellenar ambos campos para actualizar</p>";
    }
}
if(!$select){
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
        <button type="submit" name="insert">Insertar</button>
    </fieldset>
    <?=$select?>
</form>
<?=$msj?>
</body>
</html>
