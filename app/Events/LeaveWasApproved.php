<?php

namespace App\Events;

use App\Models\Leave;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LeaveWasApproved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $event;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Leave $leave)
    {
        $this->event = $leave;
        $this->message = 'Leave approved';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
