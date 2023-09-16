<?php
namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido)
    {
        echo "Salvando pedido no banco" . PHP_EOL;
    }
}