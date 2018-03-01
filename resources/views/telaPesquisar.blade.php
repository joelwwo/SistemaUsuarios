@extends('layouts.app2')
@section('conteudo')

<div class="row">
        <div class="col-md-4 col-md-offset-4    col-sm-8 col-sm-offset-2 col-xs-12">
            <h3 text-center>Pesquisar por dados do cliente</h3>
            <form method="POST" action="/pesquisar">
                @csrf
                {{--  CPF do cliente  --}}
                <div class="form-group">
                    <label for="titulo">CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required>
                </div>

    
                {{--  Salvar  --}}
                <div class="text-center">
                    <button class="btn btn-primary" role="submit" >Pesquisar</button>
                </div><br>

                @if (isset($situacao))
                    <p class="alert alert-danger alert-dismissible text-center">{{$situacao}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
                    </p>
                @endif

                @if (isset($valor))
                    <p class="alert alert-success alert-dismissible text-center">
                        
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
                        
                        <strong>Nome:</strong> {{$nome}}
                            <br>
                        <strong>Valor total em compras R$ </strong>
                            <?php
                                setlocale(LC_MONETARY, 'en_US');
                              /*   //money_format('%i', $valor); 
                                echo money_format('%i', $valor); */
                                //echo "$valor";
                                number_format($valor);
                                echo "$valor";
                            ?>
                        <br><strong>Pontos: {{$pontos}}</strong>

                    </p>
                    
                    
                @endif
            
            </form>
            
        </div>
    </div>


@endsection