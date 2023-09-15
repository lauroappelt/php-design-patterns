<?php

use Alura\DesignPattern\Impostos\ImpostoComDuasAliquotas;
use Alura\DesignPattern\Orcamento;

class IPI extends ImpostoComDuasAliquotas
{
    public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeDeItens > 3;
    }

    public function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    public function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}