<?php
$edad=rand(1,90);
echo $edad;
if($edad<18){
    echo "<p style='color:red;'>Eres menor, tienes menos de 18 años.</p>";
}else{
    echo "<p>Eres mayor, tienes mas de 18 años.</p>";
}
?>