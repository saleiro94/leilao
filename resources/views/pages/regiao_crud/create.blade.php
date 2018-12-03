@extends('layouts.app')

@section('content')
    <h1>Nova Região</h1> 
    {!! Form::open(['action' => 'RegiaoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('localizacao', 'Localização')}}
            {{Form::text('localizacao', '', ['class' => 'form-control', 'placeholder' => 'Localizacao'])}}
        </div>
        <div class="form-group">
                {{Form::label('codigo_postal', 'Código Postal')}}
                {{Form::text('codigo_postal', '', ['class' => 'form-control', 'placeholder' => 'Código Postal'])}}
            </div>
        <div class="form-group">
            {{Form::label('descricao', 'Descrição')}}
            {{Form::text('descricao', '', ['class' => 'form-control', 'placeholder' => 'Descrição'])}}
        {{Form::submit('Inserir', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection