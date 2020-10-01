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

                    <h1>lista de Livros</h1>

                    <table class="table table-bordered 2">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($livros as $livro)
                            <tr>
                                <th>
                                    
                                    <td>{{ $livro->getTitulo() }}</td>
                                    <td>{{ $livro->getAutor() }}</td>
                                    <td>{{ $livro->getGenero() }}</td>
                                    
                                    <td>
                                        <a href="{{ url('livros/{$u->id}/edit') }}" class="btn btn-info">Editar</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('livros/delete') }}" class="btn btn-danger">Deletar</a>
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