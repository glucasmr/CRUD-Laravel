@extends('templates.template')

@section('content')
    <h2 class="text-center mt-3">@if(isset($book))Editar Mangá @else Cadastrar Mangá @endif</h2>
    <div class="col-8 m-auto">
        @if (isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if (isset($book))
            <form name="formEdit" id="formEdit" action="{{url("books/$book->id")}}" method="post">
            @method('PUT')
        @else
            <form name="formCad" id="formCad" action="{{url('books')}}" method="post">
        @endif

        @csrf
                  <input class="form-control mb-3" type="text" name="title" id="title" placeholder="Obra" value="{{$book->title ?? ''}}" required>
                  <select class="form-control mb-3" name="id_user" id="id_user" required>
                      <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
                      @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                  </select>
                  <input class="form-control mb-3" type="text" name="pages" id="pages" placeholder="Núm. Páginas" value="{{$book->pages ?? ''}}"  required>
                  <input class="form-control mb-3" type="text" name="price" id="price" placeholder="Preço" value="{{$book->price ?? ''}}" required>
                  <button type="submit" class="btn btn-primary">@if(isset($book))Editar @else Cadastrar @endif</button> 
        </form>
    </div>
@endsection
