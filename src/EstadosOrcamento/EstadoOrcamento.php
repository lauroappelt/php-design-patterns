<?php
namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;
use Exception;

abstract class EstadoOrcamento
{   
    /**
     * @throws Exception
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function reprova(Orcamento $orcamento)
    {
        throw new Exception("Este orçamento não pode ser reprovado");
    }

    public function aprova(Orcamento $orcamento)
    {
        throw new Exception("Este orçamento não pode ser aprovado");
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new Exception("Este orçamento não pode ser finalizado");
    }
}