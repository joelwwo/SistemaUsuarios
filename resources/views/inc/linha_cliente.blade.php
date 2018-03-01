<div class="row">
    
    <div class="col-md-12">
        <strong>{{$cliente->nome}}</strong>
    </div>
</div>

<div class="row">
    {{--  Autor  --}}
    <div class="col-md-6">
        <p >CPF: {{$cliente->cpf}}</p> 
    </div>
    {{--  ìcones de gestão  --}}
    <div class="col-md-6 text-right" >
        
        {{--  Editar  --}}
        <a href="telaEditarCliente/{{ $cliente->id_cliente }}">
            <span title="Editar usuário" class="glyphicon glyphicon-pencil" style="margin-left: 10px"></span>
        </a>
        {{--  Eliminar  --}}
        <a href="eliminarCliente/{{ $cliente->id_cliente }}">
            <span title="Excluir usuário" class="glyphicon glyphicon-trash" style="margin-left: 10px"></span>
        </a>
    </div>
</div>