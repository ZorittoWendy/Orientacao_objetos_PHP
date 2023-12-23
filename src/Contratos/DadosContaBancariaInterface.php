<?php

declare(strict_types=1);

namespace Zoritto\OrientacaoObjetosPhp\Contratos;

interface DadosContaBancariaInterface{
    public function getBanco(): string;
    public function getNometitular(): string;
    public function getNumeroAgencia(): string;
    public function getNumeroConta(): string;
    
}

?>