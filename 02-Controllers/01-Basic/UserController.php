<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller 
{
    /**
     * Método responsavel por mostrar o perfil de um determinado usuário
     *
     * @param int $id
     * @return view
     */
    public function show($id) 
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}