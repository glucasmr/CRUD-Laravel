@extends('templates.template')

@section('content')
    <h2 class="text-center mt-3">@if(isset($user))Editar Mangaká @else Cadastrar Mangaká @endif</h2>
    <div class="col-8 m-auto">
        @if (isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if (isset($user))
            <form name="formEdit" id="formEdit" action="{{url("users/$user->id")}}" method="post">
            @method('PUT')
        @else
            <form name="formCad" id="formCad" action="{{url('users')}}" method="post">
        @endif

        @csrf
                  <input class="form-control mb-3" type="text" name="name" id="name" placeholder="Nome" value="{{$user->name  ?? ''}}" required>
                  <input class="form-control mb-3" type="text" name="email" id="email" placeholder="Email" value="{{$user->email ?? ''}}"  required>
                  <button type="submit" class="btn btn-primary">@if(isset($user))Editar @else Cadastrar @endif</button> 
        </form>
    </div>
@endsection
