<?php
namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido);
}