@extends('templates.template')

@section('content')
    <h1 class="text-center mt-3">Lista de Mangakás</h1>
    <div class="text-center mt-4 mb-4">
        <a href="{{url("users/create")}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Qtd. Mangás Publicados</th>
                <th scope="col">Action</th>
            </tr>    
            </thead>
            <tbody>
                @foreach ($user as $users)
                @php
                    $numBooks=$users->find($users->id)->relBooks->count();
                @endphp
                <tr>
                    <th scope="row">{{$users->id}}</th>
                    <td>{{$users->name}}</td>
                    <td>{{$numBooks}}</td>
                    <td>
                        <a href="{{url("users/$users->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("users/$users->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("users/$users->id")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
                @endforeach
                    
            
            </tbody>
          </table>
          {{$user->links( "pagination::bootstrap-4" )}}
    </div>
@endsection
