<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminUserController;

// Opção #1 - Rota referente ao controlador PhotoController
Route::resource('photos', PhotoController::class);

// Opção #2 - Para multiplos controladores
Route::resource([
    'photos' => PhotoController::class,
    'posts' => PostController::class
]);

// Opção #3 - Passando um nome para rota
Route::resource('photos', PhotoController::class)->names(['create' => 'fotos.construir']);

// Opção #4 - Nomeando parâmetros de rota 
Route::resource('users', AdminUserController::class)->parameters(['users' => 'admin_user']); 



// Opção #1 - Rota de recursos (resource), para consumo de API
Route::apiResource('photos', PhotoController::class);

// Opção #2 - Rota de recursos (resource), para consumo de API para multiplos controladores
Route::apiResources([
    'photos' => PhotoController::class,
    'posts' => PostController::class
]);

