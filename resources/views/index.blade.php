@extends('templates.template')

@section('content')
    <h1 class="text-center mt-3">Lista de Mangás</h1>
    <div class="text-center mt-4 mb-4">
        <a href="{{url("books/create")}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Obra</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col">Action</th>
            </tr>    
            </thead>
            <tbody>
                @foreach ($book as $books)
                @php
                    $user=$books->find($books->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$books->id}}</th>
                    <td>{{$books->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>R$ {{$books->price}}</td>    
                    <td>
                        <a href="{{url("books/$books->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("books/$books->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
                @endforeach
                    
            
            </tbody>
          </table>
    </div>
@endsection
