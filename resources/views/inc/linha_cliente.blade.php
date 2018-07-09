
<tr class="text-center">
    <td>{{$cliente->nome}}</td>
    <td>{{$cliente->cpf}}</td>
    <td>{{$cliente->total_compras*2}}</td>
        <th>
            <form class="form-inline pi-draggable" method="POST" action="/inserirCompra/{{ $cliente->id_cliente }}">
            @csrf
                <div class="form-group col-md-8 offset-md-2">
                    <div class="input-group">
                        <input autocomplete="off" type="text" name="valor" id="valor" class="form-control" placeholder="R$" onKeyPress="return(MascaraMoeda(this,'.',',',event))" required>
                        <div class="input-group-append">
                            <button class="btn btn-primary" role="submit" type="submit">Salvar</button>
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
        <!-- <a href="#" class="btn btn-outline-primary">Editar cliente</a> -->
        @include('inc.editar_cliente')
    </th>
    <th>
        <a href="eliminarCliente/{{ $cliente->id_cliente }}" class="btn btn-outline-danger">Excluir cliente</a>
    </th>
</tr>
