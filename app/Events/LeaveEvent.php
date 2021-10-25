<?php

namespace App\Events;

use App\Models\Leave;
use Illuminate\Support\Facades\Log;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LeaveEvent
{
	use Dispatchable, InteractsWithSockets, SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Get the channels the event should broadcast on.
	 *
	 * @return \Illuminate\Broadcasting\Channel|array
	 */
	public function leaveCreated(Leave $leave) {
		Log::info("Leave created: " . $leave);
	}

	/**
	* Get the channels the event should broadcast on.
	*
	* @return \Illuminate\Broadcasting\Channel|array
	*/
	public function leaveApproved(Leave $leave) {
		Log::info("Leave approved: " . $leave);
	}

	/**
	* Get the channels the event should broadcast on.
	*
	* @return \Illuminate\Broadcasting\Channel|array
	*/
	public function leaveDenied(Leave $leave) {
		Log::info("Leave denied: " . $leave);
	}
}
