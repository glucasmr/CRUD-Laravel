@extends('templates.template')

@section('content')
    <h2 class="text-center mt-3">Cadastrar Mangá</h2>
    <div class="col-8 m-auto">
        @if (isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
        <form name="formCad" id="formCad" action="{{url('books')}}" method="post">
            @csrf
                  <input class="form-control mb-3" type="text" name="title" id="title" placeholder="Obra" required>
                  <select class="form-control mb-3" name="id_user" id="id_user" required>
                      <option value="">Autor</option>
                      @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                  </select>
                  <input class="form-control mb-3" type="text" name="pages" id="pages" placeholder="Núm. Páginas" required>
                  <input class="form-control mb-3" type="text" name="price" id="price" placeholder="Preço" required>
                  <button type="submit" class="btn btn-primary">Cadastrar</button> 
        </form>
    </div>
@endsection
