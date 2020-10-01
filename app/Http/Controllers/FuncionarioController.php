<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add(Request $request)
    {
      
        $funcionario = new Funcionario;
        $funcionario = $funcionario->create( $request->all());

        return Redirect::to('/funcionarios');

    }
    
    public function new()
    {
        return view('funcionarios.create');
    }


    public function show(Funcionario $funcionario)
    {
        $funcionario = Funcionario::all();

        return view('funcionarios.list', ['funcionarios' => $funcionario]);
    }


    public function edit(Funcionario $funcionario)
    {
        //
    }


    public function update(Request $request, Funcionario $funcionario)
    {
        //
    }

    
    public function destroy(Funcionario $funcionario)
    {
        //
    }
}
