<?php

namespace App\Listeners;

use App\Notifications\RegisteredUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class RegisteredUserListener implements ShouldQueue
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
    public function handle(object $event): void
    {
        foreach (range(1, 100) as $send) {
            Notification::send($event->user, new RegisteredUserNotification($event->user));
        }
    }
}
