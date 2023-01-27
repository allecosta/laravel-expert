<?php

/**
 * Rota básica que contém uma URI e uma closure.
 * 
 * Retornando a string Olá Mundo Laravel!!
 */
Route::get('/', function () {
    return "Olá Mundo Laravel!!";
});



/**
 * Esta rota está apontando para o controlador UserController que contém o método index.
 */
Route::get('/user', [UserController::class, 'index']);



/**
 * Rota de redirecionamento para outra URI 
 * 
 * Personalizando o status code utilizando um terceiro parâmetro (por padrão é 302)
 * 
 * Ou utilizando o método permanentRedirect para retornar o status code 301.
 */
Route::redirect('/abc', '/xyz');

Route::redirect('/abc', '/xyz', 301);

Route::permanentRedirect('/abc', ('/xyz'));
