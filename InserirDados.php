<?php

namespace Crud;

require_once __DIR__ . "/../vendor/autoload.php";

use Crud\Functions\Select;
use Crud\Utilizadores\Banco;
use Crud\Utilizadores\Tabela;
use PDOException;

class InserirDados extends Banco
{
    public function deletar(): void
    {
        $table = new Tabela("usuario");

        $arTable = [
            "id_user" => "27",
        ];

        $table->salvarDelete($arTable);
        print "\t\033[1;32mDado\033[0m\033[1;31m deletado \033[0m\033[1;32mcom sucesso!\033[0m\n";
    }

    public function inserir(): void
    {
        $table = new Tabela("usuario");

        $arTable = [
            "nome" => "Vinicius",
            "email" => "felipeteste@gmail.com",
            "senha" => "exemplo@123",
        ];

        $table->salvarInserir($arTable);
        print " \t\033[1;32mNovo dado inserido com sucesso!\033[0m\n";
    }

    public function select(): void
    {
        $table = new Select("usuario");

        $arDados = [
            "COLUMN" => "",
            "WHERE" => "",
            "ORDER BY" => "",
            "LIMIT" => "",
            "OFFSET" => "",
            "BETWEEN" => "",
            "'AND'" => "",
            "NULLS FIRST" => "",
            "IS NULL" => "",
            "INNER JOIN" => "",
            "LEFT JOIN" => "",
            "FULL JOIN" => "",
            "RIGHT JOIN" => "",
            "ON" => "",
            "IS NOT NULL" => "",
        ];

        try {
            $executar = $this->execSelect($table->condicoes($arDados));
            print "\n\033[1;32mSelect será realizado com sucesso.\033[0m\n\n";
            print_r($executar);
        } catch (PDOException $erro) {
            print "\n\033[1;31mErro ocorrido ao tentar encontrar dado na tabela:\033[0m\n\n\033[1;37m{$erro}\033[0m\n";
        }
    }
}

$salvar = new InserirDados();
$salvar->select();
return $salvar;