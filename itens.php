<?php

use Alura\DesignPattern\ItemDeOrcamento;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$item1 = new ItemDeOrcamento();
$item1->valor = 200;
$item2 = new ItemDeOrcamento();
$item2->valor = 233;
$orcamento->addItem($item1);
$orcamento->addItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItemDeOrcamento();
$item3->valor = 100;
$orcamentoAntigo->addItem($item3);

$orcamento->addItem($orcamentoAntigo);

echo $orcamento->valor();
