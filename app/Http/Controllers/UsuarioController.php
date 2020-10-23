<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Models\User;

class UsuarioController extends Controller
{   
    
    public function listar(User $usuarios){

        $usuarios = User::all();

        return view('usuarios.list', ['usuarios' => $usuarios]);
    }

    public function edit($id)
    {
        $usuarios = User::findOrFail( $id );
       return view('/usuarios.edit', ['usuarios' => $usuarios]); 
    }

    
    public function update(Request $request, $id)
    {
        $usuarios = User::findOrFail( $id );
        $usuarios->update($request->all());

        return Redirect::to('home');

    }

    public function delete($id)
    {
        $usuarios = User::findOrFail( $id );
        $usuarios->delete();
        return Redirect::to('login');
    }

}
