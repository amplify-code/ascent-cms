<?php

namespace AmplifyCode\AscentCMS\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\Notification;

use AmplifyCode\AscentCMS\Notifications\WelcomeEmailNotification;

class SendWelcomeEmail
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
        if(config('cms.send_welcome_email', 1)) {
            Notification::send($event->user, new WelcomeEmailNotification($event->user));   
        }

    }
}
