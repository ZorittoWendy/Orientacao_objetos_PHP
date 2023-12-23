<?php

    declare(strict_types=1);

    namespace Zoritto\OrientacaoObjetosPhp;

use Zoritto\OrientacaoObjetosPhp\Contratos\DadosContaBancariaInterface;
use Zoritto\OrientacaoObjetosPhp\OperacoesContaBancariaInterface;


    abstract class ContaBancaria implements  OperacoesContaBancariaInterface, DadosContaBancariaInterface{
        protected string $banco;
        protected string $nomeTitular;
        protected string $numeroAgencia;
        protected string $numeroConta;
        protected float $saldo;

        public function __construct(
            string $banco,
            string $nomeTitular,
            string $numeroAgencia,
            string $numeroConta,
            float $saldo
        )
        {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroAgencia = $numeroAgencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        } 


        public function depositar(float $valor):string{
            $this -> saldo += $valor;
            return 'Dpeosito de R$' . $valor . 'realizado';
        }

        public function sacar(float $valor): string {
            $this ->saldo -= $valor;
            return 'Saque de R$ ' . $valor . 'realizado';
        }

        public abstract function obterSaldo(): string;


        public function getBanco():string
        {
            return $this->banco;
        }

        public function getNometitular():string
        {
            return $this->nomeTitular;
        }

        public function getNumeroAgencia():string
        {
            return $this->numeroAgencia;
        }

        public function getNumeroConta():string
        {
            return $this->numeroConta;
        }

    }
    
    

?>