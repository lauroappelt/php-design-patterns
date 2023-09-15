<?php
namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class ImpostoComDuasAliquotas implements InterfaceImposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->calculaTaxaMaxima($orcamento);
        }

        return $this->calculaTaxaMinima($orcamento);
    }

    abstract public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;

    abstract public function calculaTaxaMaxima(Orcamento $orcamento): float;

    abstract public function calculaTaxaMinima(Orcamento $orcamento): float;
}   