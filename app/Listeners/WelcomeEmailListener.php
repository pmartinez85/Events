<?php

namespace App\Listeners;

use App\Listeners\NewRegisteredUserEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeEmailListener
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
     * @param  NewRegisteredUserEvent  $event
     * @return void
     */
    public function handle(NewRegisteredUserEvent $event)
    {
        dd('Listened NewRegisteredUserEvent');
    }
}
