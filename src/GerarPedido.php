<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\Command;

class GerarPedido
{
    public float $valorOrcamento;
    public int $numeroDeItens;
    public string $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroItens,
        string $nomeCliente
    )
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }
}