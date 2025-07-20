<?php

namespace App\Modules\Users\Publishers;

use App\Modules\Users\Jobs\UserRegistered;

class UserEventPublisher
{

    public function __construct()
    {
        //
    }

    public function publishUserRegisteredEvent($userData): void
    {
        UserRegistered::dispatch($userData)->onQueue('user-register');
    }
}
