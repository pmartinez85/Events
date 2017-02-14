<?php

namespace App\Listeners;

use App\Listeners\NewRegisteredUserEvent;
use App\Mail\WelcomeEmail;
use App\Mail\WelcomeEmailMarkdown;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

/**
 * Class WelcomeEmailListener
 * @package App\Listeners
 */
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
     * @param Registered $event
     */
    /**
     * @param Registered $event
     */
    public function handle(Registered $event)
    {
        //dd('Listened NewRegisteredUserEvent');
        Mail::to($event->user->email)->send(new WelcomeEmailMarkdown($event->user));
    }
}
