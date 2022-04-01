<?php
$num=rand(1,100);
if(!($num%2)){
    echo "Has ganado un premio con el numero par --> $num";
}else{
    echo "No has ganado, tu numero es impar --> $num";
}
?>