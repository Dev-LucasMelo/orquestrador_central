<?php

namespace App\Modules\Users\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class UserRegistered implements ShouldQueue
{
    use Queueable;

    public $userData;

    public function __construct(array $data)
    {
        $this->userData = $data;
    }

    public function handle(): void
    {
        //
    }
}
