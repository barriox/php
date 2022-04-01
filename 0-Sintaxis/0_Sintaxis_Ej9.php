<?php
$num1=125;
$num2=0774;//0874 da error porque es un numero octal al empezar por 0
$num3=0xAbC12;
$num4=0b1100;
$string1="Esto es una cadena de caracteres";
$string2="Esto es otra cadena de caracteres";
$frase1=<<<END
<pre>
Esto es una cadena
multilinea
y termina aqui
</pre>
END;
$frase2=<<<'END'
<pre>
Esto es una cadena
multilinea
y termina aqui
</pre>
END;
$num5=1.23432230003322014000002234101;
$num6=1234E-2;
$nulo=null;
$bool1=true;
$bool2=false;

echo "<h1>Valores de tipo entero</h1><br>
\$num1(125)=$num1<br>
\$num2 (0774)=$num2<br>
\$num3 (0xAbC12)=$num3<br>
\$num4 (0b1100)=$num4";
echo "<h1>Valores de tipo real</h1><br>
\$num5 (1.23432230003322014000002234101)=$num5<br>
\$num6 (1234E-2)=$num6";
echo "<h1>Valores de tipo cadena, string</h1><br>
\$string1=$string1<br>
\$string2=$string2<br>
\$frase1=$frase1<br>
\$frase2=$frase2";
echo "<h1>Valores de tipo null, booleano</h1><br>
\$nulo (null)=-$nulo-<br>
\$bool1 (true)=-$bool1-<br>
\$bool2 (false)=-$bool2-";
?>