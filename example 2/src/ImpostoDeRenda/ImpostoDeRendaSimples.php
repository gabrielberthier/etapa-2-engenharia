<?php

namespace GabsProjects\ImpostoDeRenda;

class ImpostoDeRendaSimples extends AbstractImpostoDeRenda
{
    public function calcula(string $message, float $value): float
    {
        echo 'Fazendo umas coisas meio simples aqui'.PHP_EOL;
        echo $message;

        return $this->getCalculationMethod()->calcula($value);
    }
}
