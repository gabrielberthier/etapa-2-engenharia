<?php

namespace GabsProjects\Testers;

use GabsProjects\Emitter\EmailEmitter;
use GabsProjects\Emitter\EmitterInterface;
use GabsProjects\Emitter\JMSEmitter;
use GabsProjects\Emitter\SMSEmitter;
use GabsProjects\Factories\EmitterCreator;

/**
 * @internal
 * @coversNothing
 */
class EmitterTest
{
    public static function testEmitters()
    {
        // First way
        $emitter = new SMSEmitter();
        self::showMessage($emitter, 'MESSAGE TEST');
        $emitter = new JMSEmitter();
        self::showMessage($emitter, 'MESSAGE TEST');
        $emitter = new EmailEmitter();
        self::showMessage($emitter, 'MESSAGE TEST');
        // Factory way
        $emitter = EmitterCreator::create(EmitterCreator::SMS);
        self::showMessage($emitter, 'MESSAGE TEST');
        $emitter = EmitterCreator::create(EmitterCreator::EMAIL);
        self::showMessage($emitter, 'MESSAGE TEST');
        $emitter = EmitterCreator::create(EmitterCreator::JMS);
        self::showMessage($emitter, 'MESSAGE TEST');
    }

    public static function showMessage(EmitterInterface $emitterInterface, $message)
    {
        $emitterInterface->send($message.PHP_EOL);
    }
}
