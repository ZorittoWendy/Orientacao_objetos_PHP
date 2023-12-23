<?php
require __DIR__ . '/../vendor/autoload.php';

use Zoritto\OrientacaoObjetosPhp\ContasTipo\ContaCorrente;
use Zoritto\OrientacaoObjetosPhp\OperacoesContaBancariaInterface;
use Zoritto\OrientacaoObjetosPhp\DadosContaBancariaInterface;

    function executarOperacoes(OperacoesContaBancariaInterface $conta) : void {
        echo $conta->obterSaldo();
        echo PHP_EOL;

        echo $conta->depositar(50);
        echo PHP_EOL;

        echo $conta->obterSaldo();
        echo PHP_EOL;

        echo $conta->sacar(30);
        echo PHP_EOL;

        echo $conta->obterSaldo();
        echo PHP_EOL;

    }

    function exibirDados(DadosContaBancariaInterface $conta):void{
        echo "Banco: " . $conta->getBanco();
        echo PHP_EOL;

        echo "Ag./Conta " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroAgencia();
        echo PHP_EOL;

        echo "Titular: " . $conta->getNomeTitular();
        echo PHP_EOL;

        echo"______________________________";
        echo PHP_EOL;
    }

    $conta = new ContaCorrente(
        'Banco do Brasil', //banco
        'Zoritto Programdor', //nome Titular 
        '2345', // numero Agencia
        '3456-32', // numero conta
        0 //saldo
    );

    exibirDados($conta);
    executarOperacoes($conta);

?>