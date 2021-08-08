<?php

namespace GabsProjects\MetodoCalculo;

class MetodoCalculoSimples extends AbstractMetodoCalculo
{
    /**
     * Yes, teacher, I know I shouldn't be using float to make calculations toward currency.
     * But, since we are dealing with PHP here, it shall be better for us all if you use this without the Decimal PHP extension.
     */
    public function calcula(float $value): float
    {
        echo 'Some superficial calculations here...'.PHP_EOL;

        return $value * 2;
    }
}
