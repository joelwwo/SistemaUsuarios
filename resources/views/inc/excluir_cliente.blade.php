<!-- FUNÇÃO DE MASCARA MAIUSCULA -->
<script type="text/javascript">
    function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
</script>



   <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete-{{$cliente->id_cliente}}">
    Excluir cliente
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="delete-{{$cliente->id_cliente}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Exclusão de usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p >Deseja realmente excluir o(a) cliente</p>
            <p style="color: #20c997"> {{$cliente->nome}} ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancelar</button>
          <a href="eliminarCliente/{{ $cliente->id_cliente }}" class="btn btn-outline-danger">Excluir cliente </a>
        </div>
      </div>
    </div>
  </div>
