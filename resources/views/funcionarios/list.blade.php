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

                    <h1>lista de Funcionarios</h1>

                    <table class="table table-bordered 2">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Salario</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($funcionarios as $funcionario)
                            <tr>
                                <th>
                                    <td>{{ $funcionario->getNome() }}</td>
                                    <td>{{ $funcionario->getCPF() }}</td>
                                    <td>{{ $funcionario->getSalario() }}</td>
                                    
                                    <td>
                                        <a href="{{ url('funcionarios/{$u->id}/edit') }}" class="btn btn-info">Editar</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('funcionarios/delete') }}" class="btn btn-danger">Deletar</a>
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