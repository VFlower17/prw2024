<?php
  $pi = 3.14159;
  $raio = floatval(readline());
  $area = doubleval($pi*($raio*$raio));
  echo "A=".number_format($area,4,'.', '')."\n";
?>