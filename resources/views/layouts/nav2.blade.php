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
        <div class="col-md-12 bg-primary text-center">
            <h1>Drogaria Vida</h1>
        </div>
</div>
    
    {{--  NAVEGAÇÃO  --}}

    <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a href="/home" class="active nav-link">Clientes</a>
            </li>
            <li class="nav-item" style="padding: 0px 5px ">
                @include('inc.cadastrar_cliente')
            </li>
            <li class="nav-item" style="padding: 0px 5px ">
              <a href="relatorio" class="btn btn-outline-primary">Relatórios</a>
            </li>
            <li class="nav-item col-md-4">
              <form name="pesquisa">
                <div class="row">
                    <div class="col">
                        <input  autocomplete="off" type="text" class="form-control" id="txt_consulta" placeholder="Filtrar por nome ou CPF..." name="texto" onkeyup="maiuscula(this)" >
                    </div>
                </div>
              </form>
            </li>

            {{-- <li class="nav-item" style="padding: 0px 5px ">
              <a href="/teste" class="active nav-link">Gerar número</a>
            </li> --}}

          </ul>
        </div>
      </div>
    </div>
  </div>