<?php
$distancia_total = intval(readline());
$total_combustivel = floatval(readline());
$consumo_medio = $distancia_total / $total_combustivel;
echo number_format($consumo_medio, 3, '.', '') . " km/l\n";
?>