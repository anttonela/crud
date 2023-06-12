<?php

namespace Crud;

require_once __DIR__ . "/../vendor/autoload.php";

use Crud\InserirDados;

$salvar = new InserirDados();
$salvar->update();
return $salvar;