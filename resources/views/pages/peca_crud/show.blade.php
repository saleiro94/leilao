@extends('layouts.app')

@section('content')
    <a href="/novosLeiloes" class="btn btn-default">Voltar</a>
    <h1>{{$peca->nome}}</h1>
    <img style="width:50%" src="/storage/img/{{$peca->img}}">
    <br><br>
    <div>
        {!!$peca->descricao!!}
    </div>
    <hr>
    <small>Inserido as: {{$peca->created_at}} criado por: {{$peca->users_id}}</small>
    <hr>
   
@endsection