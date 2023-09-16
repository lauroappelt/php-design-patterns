<?php
require 'vendor/autoload.php';

use Alura\DesignPattern\AcoesGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->execute($gerarPedido);