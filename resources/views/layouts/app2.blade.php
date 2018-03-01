<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Clientes</title>

    <!-- Bootstrap -->
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
        <div class="container">
            <!--  Cabeçalho e navegação  -->
            @include('layouts.nav')

            <!--  Conteúdo  -->
            @yield('conteudo')
            <!--  Rodapé  -->
            @include('layouts.rodape')
        </div>


      

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src={{asset("js/bootstrap.min.js")}}></script>
      <script src={{asset("js/jquery.mask.min.js")}}></script>
      <script type="text/javascript">
        $(document).ready(function(){
  $('#cpf').mask('000.000.000-00', {reverse: true});
  $('#valor').mask("#.##0.00", {reverse: true});
});
      </script>
  </body>
</html>