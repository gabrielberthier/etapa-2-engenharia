<?php

namespace GabsProjects\ImpostoDeRenda;

use GabsProjects\MetodoCalculo\AbstractMetodoCalculo;

abstract class AbstractImpostoDeRenda
{
    public function __construct(private AbstractMetodoCalculo $metodo)
    {
    }

    abstract public function calcula(string $message, float $value): float;

    public function getCalculationMethod(): AbstractMetodoCalculo
    {
        return $this->metodo;
    }
}
