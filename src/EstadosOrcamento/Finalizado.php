<?php
namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;
use Exception;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new Exception("Orçamento finalizado não pode receber desconto extra");
    }
}