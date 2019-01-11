@extends('layouts.app')

@section('content')
    <h1>Adicione o seu Contacto</h1>
    {!! Form::open(['action' => 'ContactosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('n_telefone', 'Número de Telefone')}}
            {{Form::text('n_telefone', '', ['class' => 'form-control', 'placeholder' => 'Número de Telefone'])}}
        </div>
        <div class="form-group">
            {{Form::label('morada', 'Morada')}}
            {{Form::text('morada', '', ['class' => 'form-control', 'placeholder' => 'Morada'])}}
        </div>
        <div class="form-group">
                {{Form::label('email', 'E-mail')}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        {{Form::submit('Adicionar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection