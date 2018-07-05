@extends('layouts.app2')
@section('conteudo')

<div class="row">
    <div class="col-md-4 col-md-offset-4    col-sm-8 col-sm-offset-2 col-xs-12">

        @if (isset($situacao))
            @if ($situacao=="CPF não cadastrado!")
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

        <form method="POST" action="/inserirCompra">
            @csrf
            <h3 class="text-center">Inserir compra</h3>
            {{--  CPF do cliente  --}}
            <div class="form-group">
                <label for="titulo">CPF do cliente:</label>
                <input type="text"  name="cpf" id="cpf" class="form-control" placeholder="CPF" required>
            </div>

            {{--  Valor da compra  --}}
            <div class="form-group">
                <label for="autor">Valor:</label>
                <input type="text" name="valor" id="valor" class="form-control" placeholder="Valor" required>
            </div>

            {{--  Salvar  --}}
            <div class="text-center">
                <button class="btn btn-primary" role="input" >Salvar</button>
            </div>
            
        </form>
    </div>
</div>

@endsection