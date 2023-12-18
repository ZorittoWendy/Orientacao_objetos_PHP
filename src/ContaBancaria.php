<?php

    declare(strict_types=1);

    namespace Zoritto\OrientacaoObjetosPhp;

    class ContaBancaria{
        public string $banco = "Banco Inter";
        public string $nomeTitular = "Zoritto programador";
        public string $numeroAgencia = "8882";
        public string $numeroConta = "55969-2";
        public float $saldo = 0;

        public function exibirDadosDaConta():array{
            return[
                'banco' => $this->banco,
                'nomeTitular' => $this->nomeTitular,
                'nomeAgencia' => $this->numeroAgencia,
                'numeroConta' => $this->numeroConta,
                'saldo' => $this->saldo,
            ];
        }

    }
    
    

?>