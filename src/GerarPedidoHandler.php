<?php
namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    public function __construct()
    {
        //dependencias
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

        //pedido repository
        echo "Cria pedido" . PHP_EOL;

        //mail service
        echo "envia email pedido" . PHP_EOL;
    }
}