<?php
namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\Http\HttpAdapter;
use Exception;

class RegistroDeOrcamento
{   
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;    
    }

    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new Exception("Apenas orçamentos finalizados podem ser enviados");
        }

        $this->http->post('http://api.com.br/registro-orcamento', [
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->quantidadeDeItens,
        ]);
    }
}