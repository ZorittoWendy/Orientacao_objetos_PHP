<?php

use Zoritto\OrientacaoObjetosPhp\ContaBancaria;

    require __DIR__ . '/../vendor/autoload.php';

    $conta = new ContaBancaria();
    var_dump($conta->exibirDadosDaConta());


?>