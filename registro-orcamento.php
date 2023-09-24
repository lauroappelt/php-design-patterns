<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroDeOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistroDeOrcamento(new CurlHttpAdapter());
$registroOrcamento->registrar(new Orcamento());