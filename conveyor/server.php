<?php

include __DIR__ . '/vendor/autoload.php';

use Conveyor\Constants;
use Conveyor\ConveyorServer;
use Conveyor\Events\MessageReceivedEvent;

(new ConveyorServer())
    ->eventListeners([
        //Constants::EVENT_MESSAGE_RECEIVED => fn (
        //    MessageReceivedEvent $event
        //) => var_dump($event->data),
    ])
    ->conveyorOptions([
        Constants::WEBSOCKET_SERVER_TOKEN => 'my-secure-conveyor-token',
    ])
    ->port(8181)
    ->start();
