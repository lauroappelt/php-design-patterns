<?php
namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Impostos\InterfaceImposto;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Imposto;

class ISS extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento) : float 
    {
        return $orcamento->valor * 0.06;    
    }
}