@extends('layouts.app')

@section('content')
    <h1>Inserção de Peça</h1> 
    {!! Form::open(['action' => 'PeçaController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nome', 'Nome')}}
            {{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
            {{Form::label('descricao', 'Descrição')}}
            {{Form::text('descricao', '', ['class' => 'form-control', 'placeholder' => 'Descrição'])}}
        </div>
        <div class="form-group">
            {{Form::label('peso_medio', 'Peso Médio')}}
            {{Form::text('peso_medio', '', ['class' => 'form-control', 'placeholder' => 'Peso Medio'])}}
        </div>
        <div class="form-group">
            {{Form::file('img')}}
        </div>
        <div class="form-group">
            {{Form::label('estado_id', 'Estado')}}
            {{Form::text('estado_id', '', ['class' => 'form-control', 'placeholder' => 'Estado'])}}
        </div>
        <div class="form-group">
            {{Form::label('artesao_id', 'Artesão')}}
            {{Form::text('artesao_id', '', ['class' => 'form-control', 'placeholder' => 'Artesao'])}}
        </div>
        <div class="form-group">
            {{Form::label('valor', 'Valor')}}
            {{Form::text('valor', '', ['class' => 'form-control', 'placeholder' => 'Valor'])}}
        </div>
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection