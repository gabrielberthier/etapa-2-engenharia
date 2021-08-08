<?php

namespace GabsProjects\Factories;

use GabsProjects\ImpostoDeRenda\AbstractImpostoDeRenda;
use GabsProjects\MetodoCalculo\AbstractMetodoCalculo;

interface InterfaceImpostoDeRendaFactory
{
    public function create(AbstractMetodoCalculo $metodoDeCalculo): AbstractImpostoDeRenda;
}
