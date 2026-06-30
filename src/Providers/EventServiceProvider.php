<?php

namespace AmplifyCode\AscentCMS\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Login;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            \AmplifyCode\AscentCMS\Listeners\SendWelcomeEmail::class,
        ],
        Login::class => [
            \AmplifyCode\AscentCMS\Listeners\LogLogin::class,
        ],
    ];

  
}
