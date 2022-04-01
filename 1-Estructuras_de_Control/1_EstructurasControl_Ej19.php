<?php
$tiradas=0;
$c1=$c2=$c3=$c4=$c5=$c6=0;
do{
    $num=rand(1,6);
    if($num==1){
        $c1++;
    }elseif($num==2){
        $c2++;
    }elseif($num==3){
        $c3++;
    }elseif($num==4){
        $c4++;
    }elseif($num==5){
        $c5++;
    }elseif($num==6){
        $c6++;
    }else{
        echo "Error";
    }
    $tiradas++;
}while($tiradas<100000000);
echo "Se han hecho $tiradas tiradas:<br>";
echo "El numero 1 ha salido $c1<br>";
echo "El numero 2 ha salido $c2<br>";
echo "El numero 3 ha salido $c3<br>";
echo "El numero 4 ha salido $c4<br>";
echo "El numero 5 ha salido $c5<br>";
echo "El numero 6 ha salido $c6<br>";
?>