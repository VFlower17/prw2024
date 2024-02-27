<?php
list($a, $b, $c) = sscanf(readline(), "%d %d %d");
$maior_ab = ($a + $b + abs($a - $b)) / 2;
$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;
echo $maior . " eh o maior\n";
?>