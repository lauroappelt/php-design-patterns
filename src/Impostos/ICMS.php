<?php
namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Impostos\InterfaceImposto;
use Alura\DesignPattern\Orcamento;

class ICMS implements InterfaceImposto
{
    public function CalculaImposto(Orcamento $orcamento) : float 
    {
        return $orcamento->valor * 0.1;    
    }
}