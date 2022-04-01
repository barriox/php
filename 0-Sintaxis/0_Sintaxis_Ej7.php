<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,th{
            border: solid 2px;
            border-collapse: collapse;
        }
        td,tr{
            border: solid 1px;
        }
    </style>
</head>
<body>
<?php
echo "<table><th>Decimal</th><th>Binario</th><th>Hexadecimal</th><th>Octal</th>";
for ($i = 1; $i <= 100; $i++) {
    echo "<tr><td>$i</td><td>".decbin($i)."</td><td>".dechex($i)."</td><td>".decoct($i)."</td></tr>";
}
echo"</table>";
?>
</body>
</html>
