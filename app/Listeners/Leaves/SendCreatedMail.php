<?php

namespace App\Listeners\Leaves;

use App\Mail\LeaveCreated;
use App\Events\LeaveWasCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCreatedMail
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
    public function handle(LeaveWasCreated $event)
    {
        Mail::to($event->event->user->approver)->send(new LeaveCreated($event->event));
    }
}
