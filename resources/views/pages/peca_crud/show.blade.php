@extends('layouts.app')

@section('content')

    <h1>{{$peca->nome}}</h1>
    <img style="width:40%" src="/storage/img/{{$peca->img}}">
    <br>
    <h4>
        {!!$peca->descricao!!}
    </h4>
    <hr>
    <h6>Inserido a: {{$peca->created_at}} criado por: {{$user->name}}</h6>
    <hr>
    <a href="/novosLeiloes" class="btn btn-primary"> Voltar </a>   
@endsection