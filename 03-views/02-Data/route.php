<?php

/**
 * Três formas de retornar (via rota) a view users.blade.php
 * 
 * 1 - O modo básico apenas retonando a view do arquivo users.blade.php
 * 2 - Passando um array com dados
 * 3 - Passar os dados via método with() para adicionar dados indidviduais á exibição.
 */

Route::get('/user', function () {
    return view('users');
});

Route::get('/user', function () {
    return view('users', ['name' => 'B Maria']);
});

Route::get('/user', function () {
    return view('users')
        ->with('name', 'B Maria')
        ->with('occupation', 'Software Developer');
});