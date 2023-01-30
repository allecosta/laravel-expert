<?php

use App\Http\Controllers\UserController;

// Rota referente ao controlador UserController
Route::get('/user/{id}', [UserController::class, 'show']);