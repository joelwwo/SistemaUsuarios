<!-- <div class="row">
    
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
</div> -->
<tr class="text-center">
    <td>{{$cliente->nome}}</td>
    <td>{{$cliente->cpf}}</td>
    <td>?</td>
        <th>
            <form class="form-inline pi-draggable">
                <div class="form-group col-md-8">
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="R$">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
            <form class="form-inline">
            <div class="input-group">
                <div class="input-group-append"> </div>
            </div>
            </form>
        </th>     
    <th>
        <a href="#" class="btn btn-outline-primary">Editar cliente</a>
    </th>
    <th>
        <a href="#" class="btn btn-outline-danger">Excluir cliente</a>
    </th>
</tr>
