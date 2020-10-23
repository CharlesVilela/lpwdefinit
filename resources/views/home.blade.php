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
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>SEJA BEM-VINDO</h1>

                    <a href="{{url('usuarios')}}" class="waves-effect waves-light btn">Lista dos Usuarios</a>


                    <a href="{{ url('livros') }}" class="waves-effect waves-light btn">Livros</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


