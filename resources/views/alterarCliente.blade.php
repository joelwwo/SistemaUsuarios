@extends('layouts.app2')
@section('conteudo')


<div class="row">
    <div class="col-md-4 col-md-offset-4    col-sm-8 col-sm-offset-2 col-xs-12">

        <form method="POST" action="/editarCliente/{{ $cliente->id_cliente }}">
            @csrf

            
            <h3 class="text-center">Editar cliente</h3>
            {{--  Nome do cliente  --}}
            <div class="form-group">
                <label for="titulo">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{$cliente->nome}}" class="form-control" placeholder="Insira o nome do cliente" required>
            </div>

            {{--  CPF do cliente  --}}
            <div class="form-group">
                <label for="autor">CPF:</label>
            <input type="text" name="cpf" value="{{$cliente->cpf}}" id="cpf" class="form-control" placeholder="CPF" required>
            </div>

            {{--  Salvar  --}}
            <div class="text-center">
                <button class="btn btn-primary" role="submit" >Alterar</button>
            </div>
            
        </form>
    </div>
</div>
@endsection