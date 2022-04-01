<?php
$num=rand(1,100);
if(primo($num)){
    echo "El numero $num es primo";
}else{
    echo "El numero $num NO es primo";
}
function primo($num) {
    if($num == 1) {
        return false;
    }else if($num == 2) {
        return true;
    }

    if($num % 2 == 0) {
        return false;
    }
    $raiz =sqrt($num);
    for($i = 3; $i <= $raiz; $i+=2) {
        if($num % $i == 0)
            return false;
    }
    return true;
}
?>