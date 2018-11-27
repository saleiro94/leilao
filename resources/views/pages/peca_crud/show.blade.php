@extends('layouts.app')

@section('content')
    <h1>{{$peca->nome}}</h1>
    <img style="width:40%" src="/storage/img/{{$peca->img}}">
    <br><br>
    <div>
        {!!$peca->descricao!!}
    </div>
    <hr>
    <small>Inserido a: {{$peca->created_at}} criado por: {{$peca->users_id}}</small>
    <hr>
    <a href="/novosLeiloes" class="btn btn-primary">Voltar</a>   
@endsection