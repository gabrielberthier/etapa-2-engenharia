<?php

namespace GabsProjects\Emitter;

class JMSEmitter implements EmitterInterface
{
    public function send(string $message): void
    {
        echo "Sending message through JMS \n";
        echo $message;
    }
}
