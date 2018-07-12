@extends('layouts.app')
@section('conteudo')


<div class="row">
    <div class="col-md-4 col-md-offset-4    col-sm-8 col-sm-offset-2 col-xs-12">
 
        
        @if (isset($cpf))
            {{$cpf}}
        @else
            {{"Nada"}}
        @endif
    
    </div>
</div>
<br>
@endsection
