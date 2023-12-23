<?php

   declare(strict_types=1);

   namespace Zoritto\OrientacaoObjetosPhp\ContasTipo;

   use Zoritto\OrientacaoObjetosPhp\ContaBancaria;

   class ContaCorrente extends ContaBancaria{
        const TAXA = 25;
        const TIPO_CONTA = "Conta Corrente";

        public function __construct(
            string $banco,
            string $nomeTitular,
            string $numeroAgencia,
            string $numeroConta,
            float $saldo
        )
        {
            parent:: __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
        }

        public function  obterSaldo(): string{
            return 'Seu saldo atual é: R$ ' . number_format(($this-> saldo - self::TAXA), 2, ', ', '');
        }
   }
?>