<?php
require 'vendor/autoload.php';

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\ICMS;
use Alura\DesignPattern\Impostos\ISS;
use Alura\DesignPattern\Orcamento;

$orcamento = new Orcamento();
$orcamento->valor = 1000;
$orcamento->quantidadeDeItens = 3;

$calculadora = new CalculadoraDeImpostos();
echo $calculadora->calcula($orcamento, new ISS(new ICMS())) . PHP_EOL;
// echo $calculadora->calcula($orcamento, new ICMS()) . PHP_EOL;

// $calculadora = new CalculadoraDeDescontos();
// echo $calculadora->calculaDescontos($orcamento) . PHP_EOL;