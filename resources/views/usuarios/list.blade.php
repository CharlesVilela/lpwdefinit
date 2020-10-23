@extends('layouts.app')
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="waves-effect waves-light btn col-md-2"><a href="home">Voltar</a></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Usuarios</h1>

                    <table class="table table-bordered 2">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Senha</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <th>
                                    
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->senha }}</td>
                                    
                                    <td>
                                       <a href="usuarios/{{ $usuario->id }}/edit" class="btn btn-info">Editar</a>
                                    </td>
                                    <td>
                                        
                                        <a href="usuarios/{{ $usuario->id }}/delete" class="btn btn-danger">Deletar</a>
                                    </td>

                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection