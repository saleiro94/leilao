@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'ContactosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('n_telefone', 'Numero de Telefone')}}
            {{Form::text('n_telefone', '', ['class' => 'form-control', 'placeholder' => 'Numero de Telefone'])}}
        </div>
        <div class="form-group">
            {{Form::label('morada', 'Morada')}}
            {{Form::textarea('morada', '', ['class' => 'form-control', 'placeholder' => 'Morada'])}}
        </div>
        <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::textarea('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        {{Form::submit('Adicionar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection