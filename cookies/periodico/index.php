<?php
if(isset($_POST['submit']) || isset($_COOKIE['noticia'])){
    $noti=$_COOKIE['noticia']?? $_POST['noticias'];
    setcookie('noticia',$noti);
    switch($noti){
        case "politica":
            $style2="display:none;";
            $style3="display:none;";
            break;
        case "economia":
            $style1="display:none;";
            $style3="display:none;";
            break;
        case "deportes":
            $style1="display:none;";
            $style2="display:none;";
            break;
    }
}
if(isset($_POST['borrar'])){
    setcookie('noticia',$noti, time()-1);
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
    <input type="radio" name="noticias" value="politica">Política
    <input type="radio" name="noticias" value="economia">Económica
    <input type="radio" name="noticias" value="deportes">Deportiva
    <button type="submit" name="submit">Acceder</button>
    <button type="submit" name="borrar">borrar</button>
</form>
<div style="<?=$style1?>">
    <h2>NOTICIA POLITICA</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit natoque nisi rhoncus pretium, duis laoreet eu urna lacinia sagittis torquent ornare tristique montes. Suscipit ac porta orci at id eu hendrerit, imperdiet conubia ante justo eleifend feugiat quis, rhoncus tristique nulla tempor nascetur platea. Accumsan eget luctus curae cubilia nibh et ante sollicitudin congue donec nullam eros sagittis duis, ullamcorper potenti litora mi vulputate lobortis sem sed curabitur porttitor auctor lacinia.</p>
</div>
<div style="<?=$style2?>">
    <h2>NOTICIA ECONOMICA</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit natoque nisi rhoncus pretium, duis laoreet eu urna lacinia sagittis torquent ornare tristique montes. Suscipit ac porta orci at id eu hendrerit, imperdiet conubia ante justo eleifend feugiat quis, rhoncus tristique nulla tempor nascetur platea. Accumsan eget luctus curae cubilia nibh et ante sollicitudin congue donec nullam eros sagittis duis, ullamcorper potenti litora mi vulputate lobortis sem sed curabitur porttitor auctor lacinia.</p>
</div>
<div style="<?=$style3?>">
    <h2>NOTICIA DEPORTIVA</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit natoque nisi rhoncus pretium, duis laoreet eu urna lacinia sagittis torquent ornare tristique montes. Suscipit ac porta orci at id eu hendrerit, imperdiet conubia ante justo eleifend feugiat quis, rhoncus tristique nulla tempor nascetur platea. Accumsan eget luctus curae cubilia nibh et ante sollicitudin congue donec nullam eros sagittis duis, ullamcorper potenti litora mi vulputate lobortis sem sed curabitur porttitor auctor lacinia.</p>
</div>
</body>
</html>
