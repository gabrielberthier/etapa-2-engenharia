<?php

namespace GabsProjects\Factories;

use GabsProjects\ImpostoDeRenda\AbstractImpostoDeRenda;
use GabsProjects\ImpostoDeRenda\ImpostoDeRendaSimples;
use GabsProjects\MetodoCalculo\AbstractMetodoCalculo;

class ImpostoDeRendaSimplesFactory implements InterfaceImpostoDeRendaFactory
{
    public function create(AbstractMetodoCalculo $metodoDeCalculo): AbstractImpostoDeRenda
    {
        return new ImpostoDeRendaSimples($metodoDeCalculo);
    }
}
