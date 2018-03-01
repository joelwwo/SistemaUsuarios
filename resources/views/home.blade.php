@extends('layouts.app2')

@section('conteudo')

<div class="row">
    <div class="col-md-4 col-md-offset-4    col-sm-8 col-sm-offset-2 col-xs-12">

        <h1 class="text-center">Clientes cadastrados</h1>

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

            
                @foreach ($clientes as $cliente)
                    @include('inc.linha_cliente')
                @endforeach

    </div>

</div>
@endsection