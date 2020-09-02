{{--  CABEÇALHO E NAVEGAÇÃO  --}}

{{--  CABEÇALHO  --}}
<!-- FUNÇÃO DE MASCARA MAIUSCULA -->
<script type="text/javascript">
    function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
</script>

<div class="row">
    <div class="col-md-12 bg-primary">
        <h3>Drogaria Vida!!</h3>
    </div>
</div>

{{--  NAVEGAÇÃO  --}}

<br>
<br>
  <div class="row col-md-12">
    
      
        <div class="col-md-1" >
          <a href="/home" class="btn btn-primary" >Clientes</a>
        </div>
        <div class="col-md-11">
            <form class="form-inline pi-draggable" method="GET" action="/pesquisa">
                @csrf
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <input autocomplete="off" type="text" name="nome" id="nome" class="form-control" placeholder="Pesquisar por nome" onkeyup="maiuscula(this)" autofocus required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" role="submit" type="submit">Buscar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form-inline">
                <div class="input-group">
                    <div class="input-group-append"> </div>
                </div>
                </form>
        </div>

        <!-- <li class="nav-item" style="padding: 0px 5px ">
          <a href="/teste" class="active nav-link">Consulta</a>
        </li> -->

  </div>
