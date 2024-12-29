<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithBroadcasting;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class NotificationReady implements ShouldBroadcastNow
{
    use InteractsWithBroadcasting;

    public function __construct(
        public string $message,
        public string $channel,
    ) {
        $this->broadcastVia('conveyor');
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel($this->channel),
        ];
    }
}
