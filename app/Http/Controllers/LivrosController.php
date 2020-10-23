<?php

namespace App\Http\Controllers;


use App\Models\Livro;
use App\Models\User;
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
        $livros = Livro::findOrFail( $id );
       return view('/livros.edit', ['livros' => $livros]); 
    }

    
    public function update(Request $request, $id)
    {
        $livros = Livro::findOrFail( $id );
        $livros->update($request->all());

        return Redirect::to('/livros');

    }

    public function delete($id)
    {
        $livro = Livro::findOrFail( $id );
        $livro->delete();
        return Redirect::to('/livros');
    }

    public function reservarLivro($id)
    {
        $livro = Livro::findOrFail( $id );
        $livro->reservarLivro();
        return Redirect::to('/livros');
    }

}
