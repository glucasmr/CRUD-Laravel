@extends('templates.template')

@section('content')

    <h2 class="text-center m-3">CRUD mangakás-mangás</h2>
    
    <div class="container-sm bg-secondary p-3 bg-opacity-25 text-dark rounded-3 text-center">
        <h3> Selecione uma tabela:</h3>
    </div>
    
    <div class="container ">
        <div class="row">
            <div class="col bg-secondary mt-2 me-2 p-3 bg-opacity-25 text-dark rounded-3 text-center">
                <p>O projeto possui dois CRUD's relacionados. Na tabela dos mangakás estão os dados de cada autor como email e demais informações importantes. Esta tabela possui um relacionamento 1:n com a tabela mangás, seu id é a chave estrangeira e cada alteração é cascateada para a segunda tabela.</p>
                <a class="text-decoration-none" href="{{url("users")}}">
                    <button class="btn btn-primary mx-2">Ver mangakás</button>
                </a>        
            </div>
            <div class="col bg-secondary mt-2 ms-2 p-3 bg-opacity-25 text-dark rounded-3 text-center">
                <p>Na tabela dos mangás estão os dados de cada obra como preço, quantidade de páginas e autor. Por estarem relacionadas é possível exibir os dados do autor da obra. Ao cadastrar um novo título é obrigatório selecionar o autor que esteja já cadastrado na tabela de mangakás. </p>
                <a class="text-decoration-none" href="{{url("books")}}">
                    <button class="btn btn-primary mx-2">Ver mangás</button>
                </a>                
            </div>
        </div>
    </div>
    
@endsection
