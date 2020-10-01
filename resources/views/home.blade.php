@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>SEJA BEM-VINDO</h1>

                    <a href="{{url('usuarios')}}">Lista dos Usuarios</a>

                    
                    <a href="{{url('livros/new')}}">Cadastrar Livros</a>

                    <a href="{{url('funcionarios/new')}}">Cadastrar Funcionarios</a>
                    <a href="{{url('funcionarios')}}">Listar Funcionarios</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
