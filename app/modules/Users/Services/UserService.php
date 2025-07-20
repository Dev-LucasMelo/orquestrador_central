<?php

namespace App\Modules\Users\Services;
use App\Modules\Users\Publishers\UserEventPublisher;

class UserService
{

    protected $UserPublisher;

    public function __construct(UserEventPublisher $userPublisher)
    {
        $this->UserPublisher = $userPublisher;
    }

    public function registerService($dados): void {
        $this->UserPublisher->publishUserRegisteredEvent($dados);
    }
}
