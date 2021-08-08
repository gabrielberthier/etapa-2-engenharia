<?php

namespace GabsProjects\Factories;

use Exception;

class ImpostoDeRendaFactory
{
    public static function getFactory(string $type = 'SIMPLES'): InterfaceImpostoDeRendaFactory
    {
        if ('SIMPLES' === $type) {
            return new ImpostoDeRendaSimplesFactory();
        }
        if ('COMPLETO' === $type) {
            return new ImpostoDeRendaCompletoFactory();
        }

        throw new Exception('Factory not identified');
    }
}
