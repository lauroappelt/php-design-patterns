<?php

use Alura\DesignPattern\Relatorio\ArquivoExportado;
use Alura\DesignPattern\Relatorio\ConteudoExportado;

class ArquivoZipExportado implements ArquivoExportado
{   
    private string $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno)
    {
        $this->$nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $tmpFile = tempnam(sys_get_temp_dir() . DIRECTORY_SEPARATOR, 'zip');
        $arquivoZip = new ZipArchive();
        $arquivoZip->open($tmpFile);
        $arquivoZip->addFromString($this->nomeArquivoInterno, serialize($conteudoExportado->conteudo()));
        $arquivoZip->close();

        return $tmpFile;
    }
}