
<tr class="text-center">
    <td>{{$cliente->nome}}</td>
    <td>{{$cliente->cpf}}</td>
    <td>?</td>
        <th>
            <form class="form-inline pi-draggable" method="POST" action="/inserirCompra/{{ $cliente->id_cliente }}">
            @csrf
                <div class="form-group col-md-8 offset-md-2">
                    <div class="input-group">
                        <input type="text" name="valor" id="valor" class="form-control" placeholder="R$">
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
        <a href="#" class="btn btn-outline-primary">Editar cliente</a>
    </th>
    <th>
        <a href="eliminarCliente/{{ $cliente->id_cliente }}" class="btn btn-outline-danger">Excluir cliente</a>
    </th>
</tr>
