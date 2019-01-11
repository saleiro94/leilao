@extends('layouts.app')

@section('content')
    <h1>Inserir Licitação</h1> 
    
    @if($valor_licitacao == null)
    <?php$valor_licitacao =0  ?>
    
    @endif
   
    {!! Form::open(['action' => 'LanceController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">     
            {{Form::label('valor', 'Valor')}}
        
            {{Form::hidden('id',$id)}}
            {{Form::number('valor', 'value',['min'=>$valor_licitacao+1,'max'=>1000000000000000000000000000000000000000000000000000])}}     

        </div>  
        {{Form::submit('Inserir', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection