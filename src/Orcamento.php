<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use Alura\DesignPattern\ItemDeOrcamento;

class Orcamento implements InterfaceOrcavel
{
    public float $valor;
    public int $quantidadeDeItens;
    public EstadoOrcamento $estadoAtual;
    private array $itens;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
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

    public function addItem(InterfaceOrcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce($this->itens, function(float $valorAcumulado, InterfaceOrcavel $itemDeOrcamento){
            return $itemDeOrcamento->valor() + $valorAcumulado;
        }, 0);
    }
}