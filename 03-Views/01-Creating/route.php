<?php

/**
 * Esta rota retorna a view greeting.blade.php
 * O primeiro argumento passado corresponde ao nome do arquivo
 * O segundo argumento é um array com a variável (chave) name, com o valor B Maria.
 * 
 */
Route::get('/', function () {
    return view('greeting', ['name' => 'B Maria']);
});


/**
 * As views ficam localizadas em resources/views 
 * 
 * Caso uma view profile.blade.php esteja em um subdiretorio, por exemplo, em resources/views/admin
 * 
 * A rota deve ser: 
 */
Route::get('/', function () {
    return view('admin.profile', $data);
});