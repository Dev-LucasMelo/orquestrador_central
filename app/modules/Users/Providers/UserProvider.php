<?php

namespace App\Modules\Users\Providers;

use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(base_path('app/modules/Users/routes/api.php'));
    }


}
