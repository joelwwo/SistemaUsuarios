@extends('layouts.app2')
@section('conteudo')


<div class="row">
    <div class="col-md-4 col-md-offset-4    col-sm-8 col-sm-offset-2 col-xs-12">

        @if (isset($situacao))
            @if ($situacao=="CPF já cadastrado!")
            <p class="alert alert-danger text-center">{{$situacao}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
            </p>
            @else
                <p class="alert alert-success text-center">{{$situacao}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </p>
            @endif
            
        @endif

        <form method="POST" action="/">
            @csrf
            <h3 class="text-center">Cadastrar cliente</h3>
            {{--  Nome do cliente  --}}
            <div class="form-group">
                <label for="titulo">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Insira o nome do cliente" required>
            </div>

            {{--  CPF do cliente  --}}
            <div class="form-group">
                <label for="autor">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required>
            </div>

            {{--  Salvar  --}}
            <div class="text-center">
                <button class="btn btn-primary" role="submit" >Cadastrar</button>
            </div>
            
        </form>
    </div>
</div>
@endsection