<?php

namespace App\Listeners;

use App\Events\EmailSent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class DummyEmailSentListener
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
     * @param  EmailSent  $event
     * @return void
     */
    public function handle(EmailSent $event)
    {
        dump("Email Sent OK");
        Log::info("Email Sent OK");
    }
}
