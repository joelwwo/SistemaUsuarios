
<tr class="text-center">
    <td><a href="compras/{{$cliente->id_cliente}}">{{$cliente->nome}}</a></td>
    @php
        $cpf=$cliente->cpf;
        $n=substr_compare($cpf,"Sem",0,2);
        if($n==0)
        {
            echo "<td style='color:red'>".$cpf."</td>";
        }
        else {
            {
                echo "<td>".$cpf."</td>";
            }
        }
    @endphp
    <td>{{$cliente->total_compras*2}}</td>
        <th>
            <form class="form-inline pi-draggable" method="POST" action="/inserirCompra/{{ $cliente->id_cliente }}">
            @csrf
                <div class="form-group col-md-8 offset-md-2">
                    <div class="input-group">
                        <input autocomplete="off" type="text" name="valor" id="valor" class="form-control valor" placeholder="R$" {{-- onKeyPress="return(MascaraMoeda(this,'.',',',event))" --}} required>
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
    <th class="text-left">
        <!-- <a href="#" class="btn btn-outline-primary">Editar cliente</a> -->
        @include('inc.editar_cliente')
    </th>
    <th>
        {{-- <a href="eliminarCliente/{{ $cliente->id_cliente }}" class="btn btn-outline-danger">Excluir cliente </a> --}}
        @include('inc.excluir_cliente')
    </th>
</tr>
