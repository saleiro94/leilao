@extends('layouts.app')

@section('content')
    <h2>Peças</h2>
    @if(count($pecas) > 0)
        @foreach($pecas as $peca)
            <div class="well">
                <div style="border-style:solid; border-color:Black; border-width:1px;" class="row">
                        <div class="col-md-11 text-right">
                                <a href="" class="btn btn-primary">Licitar</a>  
                                </div> 
                    <div class="col-md-4 col-sm-4">
                        <img style="width:90%" src="/storage/img/{{$peca->img}}">
                    </div>
                    
                    <div class="col-md-8 col-sm-8 ">
                        <h3><a href="/novosLeiloes/{{$peca->id}}">{{$peca->nome}}</a></h3>
                        <h5>Descrição:{{$peca->descricao}}</h5>
                        <h5>Peso médio:{{$peca->peso_medio}}</h5>
                        <h5>Valor:{{$peca->valor}}</h5>
                        <h5>Estado:{{$peca->estado->descricao}}</h5>
                        <h5>User:{{$peca->users->name}}</h5>
                        <h5>Artesão:{{$peca->artesao->nome}}</h5>
                        <br>
                    </div>
            </div>
            </div>
        <br><br><br>
        @endforeach
      
    @else
        <p>No posts found</p>
    @endif
@endsection