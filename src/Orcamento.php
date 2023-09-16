<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float $valor;
    public int $quantidadeDeItens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaDescontoExtra()
    {
        return $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }
}