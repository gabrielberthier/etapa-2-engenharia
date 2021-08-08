<?php

namespace GabsProjects\Factories;

use GabsProjects\ImpostoDeRenda\AbstractImpostoDeRenda;
use GabsProjects\ImpostoDeRenda\ImpostoDeRendaCompleto;
use GabsProjects\MetodoCalculo\AbstractMetodoCalculo;

class ImpostoDeRendaCompletoFactory implements InterfaceImpostoDeRendaFactory
{
    public function create(AbstractMetodoCalculo $metodoDeCalculo): AbstractImpostoDeRenda
    {
        return new ImpostoDeRendaCompleto($metodoDeCalculo);
    }
}
