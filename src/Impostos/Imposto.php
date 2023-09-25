<?php
namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class Imposto
{   
    private ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function calculaImposto(Orcamento $orcamento)
    {
        return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoOutroImposto($orcamento);
    }

    private function realizaCalculoOutroImposto(Orcamento $orcamento)
    {
        return $this->outroImposto == null ? 0 : $this->outroImposto->calculaImposto($orcamento);
    }
}