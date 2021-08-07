<?php

namespace GabsProjects\Factories;

use Exception;
use GabsProjects\Emitter\EmailEmitter;
use GabsProjects\Emitter\EmitterInterface;
use GabsProjects\Emitter\JMSEmitter;
use GabsProjects\Emitter\SMSEmitter;

class EmitterCreator
{
    public const SMS = 0;
    public const EMAIL = 1;
    public const JMS = 2;

    public static function create(int $emitterType): EmitterInterface
    {
        return match ($emitterType) {
            self::SMS => new SMSEmitter(),
            self::EMAIL => new EmailEmitter(),
            self::JMS => new JMSEmitter(),
            default => throw new Exception('Unsopported emitter type')
        };
    }
}
