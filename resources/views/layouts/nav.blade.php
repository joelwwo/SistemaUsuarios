{{--  CABEÇALHO E NAVEGAÇÃO  --}}

{{--  CABEÇALHO  --}}

<div class="row">
        <div class="col-md-12 bg-primary">
            <h3>Drogaria Vida</h3>
        </div>
</div>
    
    {{--  NAVEGAÇÃO  --}}
    
<!--     <div class="row">
        <div class="col-md-12" style="padding: 5px 0px ">
            {{--  Início  --}}
            <a href="/home" class="btn btn-primary" role="button">
                <span class="glyphicon glyphicon-user"></span> Clientes
            </a>
            {{--  Novo cliente  --}}
            <a href="/create" class="btn btn-primary" role="button">
                Cadastrar cliente
            </a>
            {{--  Pesquisa  --}}
            <a href="/inserirCompra" class="btn btn-primary" role="button">
                <span class="glyphicon glyphicon-shopping-cart"></span> Inserir compra
            </a>
            <a href="telaPesquisar" class="btn btn-primary" role="button">
                <span class="glyphicon glyphicon-search"></span> Verificar pontos
            </a>
        </div>
    </div> -->

    <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a href="/home" class="active nav-link">Clientes</a>
            </li>
            <li class="nav-item" style="padding: 0px 5px ">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Cadastrar cliente</button>
                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <form>
                                <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="recipient-name"> </div>
                                <div class="form-group">
                                <label for="recipient-name" class="col-form-label">CPF:</label>
                                <input type="text" class="form-control" id="recipient-name"> </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
              <form name="pesquisa">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" id="txt_consulta" placeholder="Filtrar por nome ou CPF..." name="texto" >
                    </div>
                </div>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>