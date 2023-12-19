<?php

use Zoritto\OrientacaoObjetosPhp\ContaBancaria;

    require __DIR__ . '/../vendor/autoload.php';

    $conta = new ContaBancaria();

    $conta ->setBanco('Banco do Brasil');
    $conta ->setNomeTitular('Zoritto Programador');
    $conta ->setNumeroAgencia('2345');
    $conta ->setNumeroConta('11123-4');
    $conta ->setSaldo(0);

    var_dump($conta->exibirDadosDaConta());


?>