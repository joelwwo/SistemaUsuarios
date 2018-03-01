@extends('layouts.app')

@section('conteudo')
 
    <div class="row">
        <div class="col-md-4 col-md-offset-4    col-sm-8 col-sm-offset-2 col-xs-12">

            <form method="POST" action="">
                @csrf

                <div class="form-group">

                    <label for="usuario">Usuário:</label>
                    <input class="form-control" type="usuario" id="usuario" name="usuario" placeholder="Usuário">

                </div>
                <div class="form-group">

                    <label for="senha">Senha:</label>
                    <input class="form-control" type="password" id="senha" name="senha" placeholder="Senha">

                </div class="form-group">

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" >Entrar</button>
                </div>

                <div class="text-center margem-top-20">
                    <a href="">Recuperar senha :)</a>
                </div>

                    

                </div>

                

        </div>


            </form>

        </div>
    </div>
    
@endsection