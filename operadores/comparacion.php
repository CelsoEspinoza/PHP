<?php

$v1 = '10';
$v2 = 10;

$result = $v1 == $v2;
$r2 = $v1 != $v2;

var_dump($result);
var_dump($r2);

//spaceship
$r3 = $v1 <=> $v2;
var_dump($r3);
// 0:iguals -1:menos 1:mayor

$r4 = $v1 === $v2;
var_dump($r4);


 ?>
