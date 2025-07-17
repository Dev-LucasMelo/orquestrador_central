<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Users\Http\Controllers\UserController;


Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'findUnique']);
});
