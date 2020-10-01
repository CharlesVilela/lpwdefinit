<?php

namespace App\Http\Controllers;


use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LivrosController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function add(Request $request)
    {
      
        $livro = new Livro;
        $livro = $livro->create( $request->all());

        return Redirect::to('/livros');

    }


    public function new(){
        return view('livros.create');
    }

    
    public function show(Livro $livro)
    {
        $livros = Livro::all();

        return view('livros.list', ['livros' => $livros]);
    }

    
    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.create', ['livros' => $livro]);
    }

    
    public function update(Request $request, Livro $livro)
    {
        //
    }

    public function destroy(Livro $livro)
    {
        //
    }
}
