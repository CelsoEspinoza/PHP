<?php

$color = 'guinda';

if ($color == 'negro'){
  echo 'Color is Black';
} elseif($color == 'blanco') {
  echo 'Color is white';
} else {
  echo 'Color is not Black or White';
}
echo '<br>';
switch ($color){
  case 'rojo':
    echo 'Color is Red';
    break;
  case 'azul':
    echo 'Color is Blue';
    break;
  case 'verde':
    echo 'Color es Green';
    break;
  default :
    echo 'Not red, blue or green';
}
 ?>
