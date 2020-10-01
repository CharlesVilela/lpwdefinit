<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsuarioController extends Controller
{
    public function listar(User $usuarios){

        $usuarios = User::all();

        return view('usuarios.list', ['usuarios' => $usuarios]);
    }

}
