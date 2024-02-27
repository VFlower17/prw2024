<?php

// Faça um programa que receba o nome, a idade e o salário de uma pessoa assalariado e mostre quanto ele vai pagar de INSS e IRPF de acordo com seu salário e idade.

// Função para calcular o desconto do INSS
function calcularInss($salario) {
  $desconto = 0;
    if ($salario <= 1751.81) {
        return $salario * 0.08;
    } elseif ($salario <= 2919.72) {
        return $salario * 0.09;
    } elseif ($salario <= 5839.45) {
        return $salario * 0.11;
    }
    else {
        return $salario * 0.14;
    }
}

// Função para calcular o desconto do IRPF
function calcularIrpf($salario, $idade) {
  $despesa = 0;
    //Base do calculo
    $baseCalculo = $salario - calcularInss($salario);

    //Isenção por idade
    if ($idade >= 65) {
        $baseCalculo -= 1903.98;
    }
    elseif ($idade >= 60) {
        $baseCalculo -= 1267.22;
    }

  //Tabela de deduções
    if ($baseCalculo <= 1903.98) {
        return 0;
    }
    elseif ($baseCalculo <= 2826.65) {
        return $baseCalculo - 1903.98;
    }
    elseif ($baseCalculo <= 3751.05) {
        return 751.56 + ($baseCalculo - 2826.65);
    }
    elseif ($baseCalculo <= 4664.68) {
        return 1364.23 + ($baseCalculo - 3751.05);
    }
    else {
        return 2922.78 + ($baseCalculo - 4664.68);
    }
}

// Recebendo dados do usuário

$nome = $_GET['nome'];
$idade = $_GET['idade'];
$salario = $_GET['salario'];

// Calculando INSS e IRPF
$inss = calcularInss($salario);
$irpf = calcularIrpf($salario, $idade);

// Mostrando resultados
echo "Olá, $nome!\n";
echo "Seu salário bruto é de R$ $salario".PHP_EOL;
echo "Desconto do INSS: R$ $inss".PHP_EOL;
echo "Desconto do IRPF: R$ $irpf".PHP_EOL;
echo "Seu salário líquido é de R$ ".($salario - $inss - $descontoIrpf).".".PHP_EOL;

?>