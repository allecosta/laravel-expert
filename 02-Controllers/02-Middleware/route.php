<?php

use App\Http\Controllers\UserController;

/**
 * Rota referente ao controlador UserController com o middleware de autenticação
 * 
 * Porém é mais conveniente especificar o middleware dentro do construtor do controlador.
 */
Route::get('profile', [UserController::class, 'show'])->middleware('auth');

