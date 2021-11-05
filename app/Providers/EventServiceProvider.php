<?php

namespace App\Providers;

use App\Events\LeaveWasDenied;
use App\Events\LeaveWasCreated;
use App\Events\LeaveWasApproved;

use App\Listeners\Logger;
use App\Listeners\Leaves\SendApprovedMail;
use App\Listeners\Leaves\SendDeniedMail;
use App\Listeners\Leaves\SendCreatedMail;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;

use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        LeaveWasCreated::class => [
            Logger::class,
            SendCreatedMail::class
        ],
        LeaveWasApproved::class => [
            Logger::class,
            SendApprovedMail::class
        ],
        LeaveWasDenied::class => [
            Logger::class,
            SendDeniedMail::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
