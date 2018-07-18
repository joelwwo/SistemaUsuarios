<!-- FUNÇÃO DE MASCARA MAIUSCULA -->
<script type="text/javascript">
    function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
</script>

<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#delete-{{$cliente->id_cliente}}">
    Cadastrar cliente
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="delete-{{$cliente->id_cliente}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro de usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/" name="cadastro">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="recipient-name" class="col-form-label">Nome:</label>
                        <input autocomplete="off" name="nome" type="text" class="form-control" id="name" onkeyup="maiuscula(this)" required >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="recipient-name" class="col-form-label">CPF:</label>
                        <input autocomplete="off" type="text" class="form-control cpf" name="cpf" id="cpf" > 
                    </div>
                    <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">Valor da compra:</label>
                        <input autocomplete="off" type="text" name="valor" id="valor" class="form-control valor" placeholder="R$" >
                    </div>
                </div>
                <div class="row">
                    <div class=" col">
                        <br>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" role="submit" class="btn btn-outline-success">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
