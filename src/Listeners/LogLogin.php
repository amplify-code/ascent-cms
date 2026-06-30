<?php

namespace AmplifyCode\AscentCMS\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


use Spatie\Activitylog\Models\Activity;

use AmplifyCode\AscentCMS\Notifications\WelcomeEmailNotification;

class LogLogin
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
    public function handle($event)
    {
        //
        activity()
            ->performedOn($event->user)
            ->log('login');


    }
}
