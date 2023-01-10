<?php

namespace App\Listeners;

use App\Models\UserRegistrationLog;
use Illuminate\Auth\Events\Registered;

class UserRegistrationLogger
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
     * @param Registered $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $model = new UserRegistrationLog();
        $model->user_id = $event->user->id;
        $model->save();
    }
}
