@extends('templates.template')

@section('content')
    <h1 class="text-center mt-4 mb-5">Bem vindo ao CRUD mangakás-mangás</h1>
    <div class="col-8 m-auto mt-16 text-center">
    <h3> Selecione uma tabela:</h3>
    <div>
        <a href="{{url("users")}}">
            <button class="btn btn-primary">Ver mangakás</button>
        </a>
        <a href="{{url("books")}}">
            <button class="btn btn-primary">Ver mangás</button>
        </a>
    </div>
        
    </div>
@endsection
