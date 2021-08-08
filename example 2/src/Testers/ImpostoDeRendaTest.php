<?php

namespace GabsProjects\Testers;

use GabsProjects\Factories\ImpostoDeRendaFactory;
use GabsProjects\MetodoCalculo\MetodoCalculoCompleto;
use GabsProjects\MetodoCalculo\MetodoCalculoSimples;

/**
 * @internal
 * @coversNothing
 */
class ImpostoDeRendaTest
{
    public static function testFactories()
    {
        $metodoCompletão = new MetodoCalculoCompleto();
        $metodoSimplex = new MetodoCalculoSimples();

        $simplexFactory = ImpostoDeRendaFactory::getFactory();
        $completeFactory = ImpostoDeRendaFactory::getFactory('COMPLETO');

        $simplexFactory->create($metodoCompletão);
        $simplexFactory->create($metodoSimplex);

        $completeFactory->create($metodoCompletão);
        $completeFactory->create($metodoSimplex);
    }
}
