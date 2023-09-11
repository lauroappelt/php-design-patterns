<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\InterfaceImposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, InterfaceImposto $imposto): float
    {   
        return $imposto->calculaImposto($orcamento);
    }
}