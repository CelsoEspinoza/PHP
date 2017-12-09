<?php

$a = 1;
$b = 1;
$c = 1;
$a++;
$b--;
var_dump($a);
var_dump($b);
// Hace el incremento luego de imprimir 'c'
var_dump($c++);
// Hace el incremento antes de...
var_dump(++$c);



?>
