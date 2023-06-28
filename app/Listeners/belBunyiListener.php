<?php

namespace App\Listeners;

use App\Events\belBunyi;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class belBunyiListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(belBunyi $event): void
    {
        
    }
}
