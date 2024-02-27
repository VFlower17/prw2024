<?php
function calcularNotas($valor) {
  $notas = array(
    100 => 0,
    50 => 0,
    20 => 0,
    10 => 0,
    5 => 0,
    2 => 0,
    1 => 0,
  );

  foreach ($notas as $nota => &$quantidade) {
    while ($valor >= $nota) {
      $valor -= $nota;
      $quantidade++;
    }
  }

  return $notas;
}

$valor = readline("Digite o valor: ");
$notas = calcularNotas($valor);

echo $valor . PHP_EOL;
foreach ($notas as $nota => $quantidade) {
  echo number_format($quantidade, 0) . " nota(s) de R$ " . number_format($nota, 2,",","") . PHP_EOL;
}

?>