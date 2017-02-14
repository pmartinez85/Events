<?php

namespace App\Listeners;


use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class MonitorListener
 * @package App\Listeners
 */
class MonitorListener
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
       // dump('monitor listener executed');
    }
}
