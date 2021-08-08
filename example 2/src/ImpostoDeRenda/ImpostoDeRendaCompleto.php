<?php

namespace GabsProjects\ImpostoDeRenda;

class ImpostoDeRendaCompleto extends AbstractImpostoDeRenda
{
    public function calcula(string $message, float $value): float
    {
        echo 'Fazendo umas coisas completonas aqui'.PHP_EOL;
        echo $message;

        return $this->getCalculationMethod()->calcula($value);
    }
}
