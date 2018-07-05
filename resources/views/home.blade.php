@extends('layouts.app2')

@section('conteudo')



        <h1 class="text-center">Clientes cadastrados</h1>

    @if (session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif
    @if (session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
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
            <th class="text-center"><i class="fas fa-trash-alt"></th>
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