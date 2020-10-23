@extends('layouts.app')
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="waves-effect waves-light btn col-md-2"><a href="home">Voltar</a></div>
                <a href="{{url('livros/new')}}" class="waves-effect waves-light btn col-md-2">Cadastrar</a>


                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    
                    
                        <h1>Livros</h1>
                        


                    <table class="table table-bordered 2">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                                <th scope="col">Reservar</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($livros as $livro)
                            <tr>
                                <th>

                                <td>{{ $livro->titulo }}</td>
                                <td>{{ $livro->autor }}</td>
                                <td>{{ $livro->genero }}</td>
                                <td>{{ $livro->quantidade }}</td>

                                <td>
                                    <a href="livros/{{ $livro->id }}/edit" class="waves-effect waves-light btn ">Editar</a>
                                </td>
                                <td>

                                    <a href="livros/{{ $livro->id }}/delete" class="waves-effect waves-light btn red">Deletar</a>
                                </td>

                                <td>
                                    <a href="livros/{{ $livro->id }}/reservarLivro" class="waves-effect waves-light btn">Reservar Livro</a>
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