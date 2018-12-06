@extends('layouts.app')

@section('content')
    <h1>Inserir Licitação</h1> 
    
    {!! Form::open(['action' => 'LanceController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
              
            {{Form::label('valor', 'Valor')}}
            {{Form::text('valor', '', ['class' => 'form-control', 'placeholder' => 'Valor'])}}
            {{Form::hidden('id',{{$id}})}}
        </div>  
        {{Form::submit('Inserir', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection