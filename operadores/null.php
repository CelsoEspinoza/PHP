<?php

$a = null;
// Operador ??, si "null" da el valor por defecto.
// Si el valor de "$a" no existiera, saldría el valor
// por defecto.
$result = $a ?? 'valor por default';
var_dump($result);

 ?>
