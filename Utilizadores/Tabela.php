<?php

namespace Crud\Utilizadores;

use Connection\Connection;
use Crud\Functions\Inserir;
use Crud\Functions\Deletar;

class Tabela extends Connection
{
    private $schema;
    private $table;

    public function __construct(string $nomeTable, string $nomeSchema = "public")
    {
        $this->schema = $nomeSchema;
        $this->table = $nomeTable;
    }

    public function salvarInserir(array $arInserir = []): void
    {
        $inserir = new Inserir($this->table);
        $chave = $inserir->inserir($arInserir);
    }
    
    public function salvarDelete(array $arDeletar = []): void
    {
        $deletar = new Deletar($this->table);
        $chave = $deletar->deletar($arDeletar);
    }
}
