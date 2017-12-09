<?php

$v1 = 1;
$v2 = 1;

$v3 = 2;
$v4 = 3;

$result1 = $v1 == $v2;
$result2 = $v3 == $v4;

// <br> : salto de línea (html)
echo "Resultado 1: <br>";
var_dump($result1);
echo '<br>';
echo 'Resultado 2: <br>';
var_dump($result2);
echo "<br> Resultado 3: <br>";
$result3 = $result1 && $result2;
var_dump($result3);
$result4 = $result1 || $result2;
echo "<br> Resultado 4: <br>";
var_dump($result4);
?>
