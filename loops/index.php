<?php

for ($i=0; $i <= 10 ; $i++) {
  echo "$i " ;
}

echo "<br>";

$i = 0;
while($i <= 10){
  echo "$i __";
  if ($i == 9){
    echo ++$i;
    break;
  }
  $i++;
}

echo "<br>";

$i = 1;
do{
  echo $i . " * ";
  if ($i == 9){
    echo ++$i;
    break;
  }
  $i++;
} while ($i <= 10);

echo "<br>";

$names = ["Celso", "Andrea", "Nelson", "Elizabeth"];
foreach ($names as $i){
  echo "$i <br>";
}

foreach ($names as $key => $value) {
  echo "$key : $value <br>";
}




 ?>
