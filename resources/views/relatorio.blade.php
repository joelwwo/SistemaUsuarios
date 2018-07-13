@extends('layouts.app')
@section('conteudo')


    <div class="col-md-12 col-md-offset-12    col-sm-8 col-sm-offset-2 col-xs-12">
        <br>
        
        @if (isset($compras))
            @if (count($compras)==1 and $compras[0]->valor==0 )
                <p class="alert alert-danger alert-dismissible text-center">
                    {{"Este(a) cliente ainda não possui nenhuma compra!"}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </p>
        @elseif (count($compras)==1 and $compras[0]->valor != 0)
    </div>

            <div >
                <table class="table table-striped" id="compras">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">Valor</th>
                            <th class="text-center">Data da compra</th>
                        </tr>
                    </thead>
                        <tbody>    
                            @foreach ($compras as $compra)
                                @include('inc.linha_compras')
                            @endforeach
                        </tbody>
                </table>
            </dir>        
            @else
                <div >
                    <table class="table table-striped" id="compras">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Valor</th>
                                <th class="text-center">Data da compra</th>
                            </tr>
                        </thead>
                            <tbody>    
                                @foreach ($compras as $compra)
                                    @include('inc.linha_compras')
                                @endforeach
                            </tbody>
                    </table>
                </dir>  
            @endif
        @else
            @if (isset($clientes))
            @if ($clientes->isEmpty())
                {{"Nenhum cliente cadastrado com esse nome!"}}
                @else
                    @foreach ($clientes as $cliente)
                        <a href="/compras/{{$cliente->id_cliente}}" class="btn btn-outline-primary">{{$cliente->nome}}</a>
                    @endforeach
            <br>
            @endif
            @else
                {{-- {{"Nada"}} --}}
                <br>
            @endif
            <br>

        @endif  
@endsection
