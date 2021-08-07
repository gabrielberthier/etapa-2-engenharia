<?php

namespace GabsProjects\Emitter;

interface EmitterInterface
{
    public function send(string $message): void;
}
