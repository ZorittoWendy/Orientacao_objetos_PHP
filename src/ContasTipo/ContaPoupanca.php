<?php
    declare(strict_types=1);

    namespace Zoritto\OrientacaoObjetosPhp\ContasTipo;

    use Zoritto\OrientacaoObjetosPhp\ContaBancaria;

    class ContaPoupanca extends ContaBancaria{
        const REDIMENTO = 0.03;
        const TIPO_CONTA = 'Conta Poupança';

        public function __construct( 
            string $banco,
            string $nomeTitular,
            string $numeroAgencia,
            string $numeroConta,
            float $saldo
        )
        {
            parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
        }

        public function obterSaldo(): string
        {
            return 'Seu saldo atual é: R$ ' . number_format(($this->saldo * self::REDIMENTO), 2, ', ', '');
        }
    }
  
?>