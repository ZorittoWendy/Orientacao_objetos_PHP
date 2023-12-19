<?php

use Zoritto\OrientacaoObjetosPhp\ContaBancaria;

    require __DIR__ . '/../vendor/autoload.php';

    $conta = new ContaBancaria(
        'Banco do Brasil', // banco
        'Zoritto Programador', //nome do usuario
        '2433', //numero da conta
        '56989-10', //numero conta
        0 //saldo
    );

    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->depositar(50);
    echo PHP_EOL;

    echo $conta->sacar(30);
    echo PHP_EOL;

    echo $conta->obterSaldo();
    echo PHP_EOL;

?>