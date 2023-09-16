<?php
namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;
use Exception;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new Exception("Orçamento reprovado não pode receber desconto extra");
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}