<?php

namespace GabsProjects\Emitter;

class SMSEmitter implements EmitterInterface
{
    public function send(string $message): void
    {
        echo "Sending message through SMS \n";
        echo $message;
    }
}
