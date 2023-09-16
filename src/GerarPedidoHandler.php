<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\AcoesGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesGerarPedido\EnviarPedidoPorEmail;

class GerarPedidoHandler
{   
    private array $acoesAposGerarPedido;

    public function __construct()
    {
        //dependencias
    }

    public function adicionaAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeDeItens = $gerarPedido->numeroDeItens;
        $orcamento->valor = $gerarPedido->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->nomeCliente;
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}