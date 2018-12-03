@extends('layouts.app')

@section('content')
    <h1>Novo Artesão</h1> 
    {!! Form::open(['action' => 'ArtesaoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nome', 'Nome')}}
            {{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome'])}}
        </div>
        <div class="form-group">
                {{Form::label('idade', 'Idade')}}
                {{Form::text('idade', '', ['class' => 'form-control', 'placeholder' => 'Idade'])}}
            </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
                {{Form::label('catregoria_id', 'Categoria')}}
            <select class="form-control m-bot15" name="categoria_id">

                @if ($categorias->count())
            
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $selectCategoria == $categoria->id ? 'selected="selected"' : '' }}>{{ $categoria->descricao }}</option>    
                        @endforeach
                @endif
            
            </select>
         </div>
         <div class="form-group">
                {{Form::label('regiao_id', 'Região')}}
            <select class="form-control m-bot15" name="regiao_id">

                @if ($regioes->count())
            
                    @foreach($regioes as $regioe)
                        <option value="{{ $regioe->id }}" {{ $selectRegiao == $regioe->id ? 'selected="selected"' : '' }}>{{ $regioe->localizacao }}</option>    
                        @endforeach
                @endif
            
            </select>
         </div>
      
        {{Form::submit('Inserir', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection