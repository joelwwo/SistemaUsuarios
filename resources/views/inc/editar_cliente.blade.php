
<!-- FUNÇÃO DE MASCARA MAIUSCULA -->
    <script type="text/javascript">
        function maiuscula(z){
            v = z.value.toUpperCase();
            z.value = v;
        }
    </script>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#{{ $cliente->id_cliente }}">Editar cliente</button>
        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="{{ $cliente->id_cliente }}">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <form method="POST" action="/editarCliente/{{ $cliente->id_cliente }}" name="editar" >
                    @csrf
                    <div class="form-group col-md-12">
                            <label for="recipient-name" class="col-form-label">Nome:</label>
                            <input value="{{$cliente->nome}}"  autocomplete="off" name="nome" type="text" class="form-control" id="name" onkeyup="maiuscula(this)" required >
                        </div>
                        <div class="form-group col-md-12">
                            <label for="recipient-name" class="col-form-label">CPF:</label>
                            <input  value="{{$cliente->cpf}}" autocomplete="off" type="text" class="form-control" name="cpf" id="cpf" required >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" role="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>