<?php
$x = 3;
$var2 = 1;
$var = function () use ($var2){
    echo "This is a closure <br>";
    echo "Valor : $var2";
};
$var();
echo "<br>";
$numbers = [1, 2, 3, 4, 5];
$closure = function($n) use($x){
  return $n * $x;
};
// array_map : función con la que puedes aplicar
// funciones a los arrays.
$result = array_map($closure, $numbers);

var_dump($result);



?>
