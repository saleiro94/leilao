@extends('layouts.app')

@section('content')
    <h1>Peças</h1>
    @if(count($pecas) > 0)
        @foreach($pecas as $peca)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:50%" src="/storage/img/{{$peca->img}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/novosLeiloes/{{$peca->id}}">{{$peca->nome}}</a></h3>
                        <h3>Descrição:{{$peca->descricao}}</h3>
                        <h3>Peso médio:{{$peca->peso_medio}}</h3>
                        <h3>Valor:{{$peca->valor}}</h3>
                        <h3>Estado:{{$peca->estado_id}}</h3>
                        <h3>User:{{$peca->users_id}}</h3>
                        <h3>Artesão:{{$peca->artesao_id}}</h3>
                    </div>
                </div>
            </div>
        @endforeach
      
    @else
        <p>No posts found</p>
    @endif
@endsection