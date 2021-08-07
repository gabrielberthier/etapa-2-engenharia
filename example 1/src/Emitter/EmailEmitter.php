<?php

namespace GabsProjects\Emitter;

class EmailEmitter implements EmitterInterface
{
    public function send(string $message): void
    {
        echo "Sending message through email \n";
        echo $message;
    }
}
