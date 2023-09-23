<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\ListaDeOrcamentos;
use Alura\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeDeItens = 2;
$orcamento1->aprova();
$orcamento1->valor = 156.34;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeDeItens = 2;
$orcamento2->reprova();
$orcamento2->valor = 156.34;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeDeItens = 2;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 156.34;

// $listaOrcamentos = [
//     $orcamento1,
//     $orcamento2,
//     $orcamento3,
// ];

$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento) {
    echo "Valor " . $orcamento->valor . PHP_EOL;
    echo "Estado" . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qtd: " . $orcamento->quantidadeDeItens . PHP_EOL;
    echo PHP_EOL;
}