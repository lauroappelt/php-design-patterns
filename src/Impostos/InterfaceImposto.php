<?php
namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

interface InterfaceImposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}