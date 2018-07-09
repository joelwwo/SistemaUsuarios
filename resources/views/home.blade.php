@extends('layouts.app2')

@section('conteudo')



        <h1 class="text-center">Clientes cadastrados</h1>

    @if (session('sucesso'))
        <div class="alert alert-success text-center">
            {{ session('sucesso') }}
        </div>
    @endif
    @if (session('erro'))
        <div class="alert alert-danger text-center">
            {{ session('erro') }}
        </div>
    @endif

    @if (session('compra'))
        <p class="alert alert-success alert-dismissible text-center">
                {{ session('compra') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    &times;
                </span>
            </button>
        </p>

    @endif

    @if (session('excluir'))
        <div class="alert alert-success text-center">
            {{ session('excluir') }}
        </div>
    @endif

    @if (session('cpf'))
        <div class="alert alert-danger text-center">
            {{ session('cpf') }}
        </div>
    @endif

    @if (session('editar'))
        <div class="alert alert-success text-center">
            {{ session('editar') }}
        </div>
    @endif

<table class="table table-striped" id="tabela">
    <thead class="thead-dark">
        <tr>
            <th class="text-center">Nome</th>
            <th class="text-center">CPF</th>
            <th class="text-center">Pontos</th>
            <th class="text-center">Inserir compra</th>
            <th class="text-center"><i class="fas fa-user-edit"></th>
            <th class="text-center"><i class="fas fa-trash-alt" style="color:red"></th>
        </tr>
    </thead>
    <tbody>    
        
                @foreach ($clientes as $cliente)
                    @include('inc.linha_cliente')
                @endforeach

    </tbody>
</table>
<script>
$('input#txt_consulta').quicksearch('table#tabela tbody tr');
</script>

@endsection