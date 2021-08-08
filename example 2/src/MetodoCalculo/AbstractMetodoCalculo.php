<?php

namespace GabsProjects\MetodoCalculo;

abstract class AbstractMetodoCalculo
{
    /**
     * Yes, teacher, I know I shouldn't be using float to make calculations toward currency.
     * But, since we are dealing with PHP here, it shall be better for us all if you use this without the Decimal PHP extension.
     */
    abstract public function calcula(float $value): float;
}
