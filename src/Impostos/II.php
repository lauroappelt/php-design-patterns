<?php

use Alura\DesignPattern\Impostos\ImpostoComDuasAliquotas;
use Alura\DesignPattern\Orcamento;

class II extends ImpostoComDuasAliquotas
{
    public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    public function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    public function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}