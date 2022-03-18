@extends('templates.template')

@section('content')
    <h1 class="text-center mt-3">Cadastrar Mangá</h1>
    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" action="{{url('books')}}" method="post">
            @csrf
                  <input class="form-control mb-3" type="text" name="title" id="title" placeholder="Obra">
                  <select class="form-control mb-3" name="id_user" id="id_user">
                      <option value="">Autor</option>
                      @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                  </select>
                  <input class="form-control mb-3" type="text" name="pages" id="pages" placeholder="Núm. Páginas">
                  <input class="form-control mb-3" type="text" name="price" id="price" placeholder="Preço">
                  <button type="submit" class="btn btn-primary">Cadastrar</button> 
        </form>
    </div>
@endsection
