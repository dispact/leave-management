<?php

namespace App\Listeners\Leaves;

use App\Mail\LeaveApproved;
use App\Events\LeaveWasApproved;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendApprovedMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(LeaveWasApproved $event)
    {
        Mail::to($event->event->user)->send(new LeaveApproved($event->event));
    }
}
