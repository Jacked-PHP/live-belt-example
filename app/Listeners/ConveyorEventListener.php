<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use LiveBelt\Events\OnConveyorMessage;

class ConveyorEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OnConveyorMessage $event): void
    {
        logger()->info('Conveyor event listener', ['event' => $event]);
    }
}
