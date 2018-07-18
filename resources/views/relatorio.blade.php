@extends('layouts.app')
@section('conteudo')


    <div class="col-md-12 col-md-offset-12    col-sm-8 col-sm-offset-2 col-xs-12">
        <br>
        
        @if (isset($situacaoCliente) && $situacaoCliente=="sem cliente")
            <p class="alert alert-danger alert-dismissible text-center">
                {{"Nenhum cliente cadastrado com esse nome!"}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </p>
        @endif
            
        @if ((isset($situacaoCliente) && isset($situacaoCompra)) && ($situacaoCliente=="um" && $situacaoCompra=="sem compras"))              
        
        <p class="alert alert-warning alert-dismissible text-center">
                {{"Nenhuma compra cadastrada!"}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </p>
            <div class="row col-md-12">
                <div  class="col-md-4 btn btn-outline-primary">Nome: {{$cliente[0]->nome}}</div>
                <div  class="col-md-4 btn btn-outline-primary">Total em compras: 
                    @php
                        echo ' R$ ' . number_format($valor_compras, 2, ',', '.');
                    @endphp
                </div>
                <div  class="col-md-4 btn btn-success">Total em pontos: {{($valor_compras)*2}}</div>
            </div>
            <br>
        @endif

        @if ((isset($situacaoCliente) and isset($situacaoCompra)) and ($situacaoCliente=="um" and $situacaoCompra=="muitas compras"))
        <div class="row col-md-12">
                <div  class="col-md-4 btn btn-outline-primary">Nome: {{$cliente[0]->nome}}</div>
                <div  class="col-md-4 btn btn-outline-primary">Total em compras: 
                    @php
                        echo ' R$ ' . number_format($valor_compras, 2, ',', '.');
                    @endphp
                </div>
                <div  class="col-md-4 btn btn-success">Total em pontos: {{($valor_compras*2)}}</div>
            </div>
            <br>
        
            <div >
                <h1 class="text-center">Compras</h1>
                <table class="table table-striped" id="compras">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">Valor da compra</th>
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

            @if (isset($clientes) and isset($situacaoCliente) and $situacaoCliente=="muitos clientes")
                @foreach ($clientes as $cliente)
                    <a href="/compras/{{$cliente->id_cliente}}" class="btn btn-outline-primary">{{$cliente->nome}}</a>
                @endforeach
                {{-- <h1>Muitos clientes!</h1> --}}
                <br>

            @endif 
            <br>

@endsection
