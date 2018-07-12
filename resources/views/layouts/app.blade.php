<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Clientes</title>

    <!-- Bootstrap -->
    <link href={{asset("css/bootstrap4.min.css")}} rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

   
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
      <script src={{asset("js/bootstrap4.min.js")}}></script>
      <script src={{asset("js/jquery.mask.min.js")}}></script>
      <script type="text/javascript">
      $(document).ready(function(){
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.valor').mask("#.##0.00", {reverse: true});
      });
      </script>

<script language="javascript">
  //-----------------------------------------------------
  //Funcao: MascaraMoeda
  //Sinopse: Mascara de preenchimento de moeda
  //Parametro:
  //   objTextBox : Objeto (TextBox)
  //   SeparadorMilesimo : Caracter separador de milésimos
  //   SeparadorDecimal : Caracter separador de decimais
  //   e : Evento
  //Retorno: Booleano
  //Autor: Gabriel Fróes - www.codigofonte.com.br
  //-----------------------------------------------------
  function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
      var sep = 0;
      var key = '';
      var i = j = 0;
      var len = len2 = 0;
      var strCheck = '0123456789';
      var aux = aux2 = '';
      var whichCode = (window.Event) ? e.which : e.keyCode;
      if (whichCode == 13) return true;
      key = String.fromCharCode(whichCode); // Valor para o código da Chave
      if (strCheck.indexOf(key) == -1) return false; // Chave inválida
      len = objTextBox.value.length;
      for(i = 0; i < len; i++)
          if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
      aux = '';
      for(; i < len; i++)
          if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
      aux += key;
      len = aux.length;
      if (len == 0) objTextBox.value = '';
      if (len == 1) objTextBox.value = '0'+ SeparadorMilesimo + '0' + aux;
      if (len == 2) objTextBox.value = '0'+ SeparadorMilesimo + aux;
      if (len > 2) {
          aux2 = '';
          for (j = 0, i = len - 3; i >= 0; i--) {
              if (j == 3) {
                  aux2 += SeparadorMilesimo;
                  j = 0;
              }
              aux2 += aux.charAt(i);
              j++;
          }
          objTextBox.value = '';
          len2 = aux2.length;
          for (i = len2 - 1; i >= 0; i--)
          objTextBox.value += aux2.charAt(i);
          objTextBox.value += SeparadorMilesimo + aux.substr(len - 2, len);
      }
      return false;
  }
  </script>

<script type="text/javascript">
  function maiuscula(z){
      v = z.value.toUpperCase();
      z.value = v;
  }
</script>

  </body>
</html>