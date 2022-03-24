@extends('templates.template')

@section('content')
    <h1 class="text-center mt-4 mb-5">{{$user->name}}</h1>
    @php
        $books = $user->find($user->id)->relBooks;
        $numBooks = $books->count();
    @endphp
    <div class="col-8 m-auto">
        Nome: {{$user->name}}<br>
        Email do Autor: {{$user->email}}<br>
        Qtd. Obras publicadas: {{$numBooks}}<br>
        <br>
        @csrf
        <table class="table text-center">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Obra</th>
                <th scope="col">Preço</th>
                <th scope="col">Action</th>
            </tr>    
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->title}}</td>
                    <td>R$ {{$book->price}}</td>    
                    <td>            
                        <a href="{{url("books/$book->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("books/$book->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("books/$book->id")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
                @endforeach
                    
            
            </tbody>
          </table>

    </div>
@endsection
