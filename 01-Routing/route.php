<?php

/**
 * BASIC ROUTING 
 * 
 */

// Rota básica que contém uma URI e uma closure
// Retornando a string Olá Mundo Laravel
// Rota apontando para o controlador UserController que contém o método index.

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return "Olá Mundo Laravel";
});


Route::get('/user', [UserController::class, 'index']);


// Rota de redirecionamento para outra URI   
// Personalizando o status code utilizando um terceiro parâmetro (por padrão é 302)
// Ou utilizando o método permanentRedirect() para retornar o status code 301.

Route::redirect('/abc', '/xyz');

Route::redirect('/abc', '/xyz', 301);

Route::permanentRedirect('/abc', ('/xyz'));



/**
 * ROUTE PARAMETERS 
 * 
 */

// Passando parâmetros na rota
// Capturando o id de um usúario via URL
// Paasando mais de um parâmetro via URL
// Passando valor de parâmetro opcional
// Restrigindo o formato dos parâmetros utilizando o método where() utilizando expressões regulares.

Route::get('/home', function () {
    return "Olá Mundo Laravel. Bem vindo a nossa página oficial!!";
});

Route::get('/user/{id}', function ($id) {
    return "usário: " . $id;
});

Route::get('/posts/{posts}/comments/{comments}', function ($posts, $comments) {

});


Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name}', function ($name) {

})->where('name', '[A-Za-z]+');


Route::get('user/{id}', function ($id) {

})->where('id', '[0-9]+');


Route::get('user/{id}/{name}', function ($id, $name) {

})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



/**
 * Named Routes
 * 
 */

 // Especificando um nome para a rota
 // Especificando um nome de rota para ações do controlador.
Route::get('user/profile', function () {

})->name('profile');


Route::get('user/profile', [UserProfileController::class, 'show'])->name('profile');


// Gerando URL
$url = route('profile');

// Redirecionamento
return redirect()->route('profile');


// Rota com parâmentros
// Gerando URL com chave e valor
Route::get('/user/{id}/profile', function ($id) {

})->name('profile');


$url = route('profile', ['id' => 2]);