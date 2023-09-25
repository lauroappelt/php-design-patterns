<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Impostos\InterfaceImposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {   
        return $imposto->calculaImposto($orcamento);
    }
}