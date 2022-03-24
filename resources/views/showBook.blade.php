@extends('templates.template')

@section('content')
    <h1 class="text-center mt-4 mb-5">{{$book->title}}</h1>
    @php
        $user=$book->find($book->id)->relUsers;
    @endphp
    <div class="col-8 m-auto">
        Título: {{$book->title}}<br>
        Autor: {{$user->name}}<br>
        Email do Autor: {{$user->email}}<br>
        Páginas: {{$book->pages}}<br>
        Preço: R${{$book->price}}<br>
        
    </div>
@endsection
