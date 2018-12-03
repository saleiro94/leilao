@extends('layouts.app')

@section('content')
    <h1>Inserção de Peça</h1> 
    {!! Form::open(['action' => 'PecaController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
            {{Form::text('peso_medio', '', ['class' => 'form-control', 'placeholder' => 'Peso Médio'])}}
        </div>
        <div class="form-group">
            {{Form::label('valor', 'Valor')}}
            {{Form::text('valor', '', ['class' => 'form-control', 'placeholder' => 'Valor'])}}
        </div>
        <div class="form-group">
            {{Form::file('img')}}
        </div>
        <div class="form-group">
            <select class="form-control m-bot15" name="estado_conservacaos_id">

                @if ($estados->count())
            
                    @foreach($estados as $estado)
                        <option value="{{ $estado->id }}" {{ $selectEstado == $estado->id ? 'selected="selected"' : '' }}>{{ $estado->descricao }}</option>    
                        @endforeach
                @endif
            
            </select>
              </div>

        <div class="form-group">
            {{Form::label('artesao_id', 'Artesão')}}
            {{Form::text('artesao_id', '', ['class' => 'form-control', 'placeholder' => 'Artesão'])}}
        </div>

        
      
        {{Form::submit('Inserir', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection