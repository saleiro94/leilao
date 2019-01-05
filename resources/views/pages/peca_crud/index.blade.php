@extends('layouts.app')

@section('content')
<br>
    <h2>Peças</h2>

    <div class="text-right">
    <a href="/filtrarLeiloes" class="btn btn-primary"> Filtrar </a>   
    </div>


    <br>
    @if(count($pecas) > 0)
        @foreach($pecas as $peca)
            <div class="well">
                <div style="border-style:solid; border-color:Black; border-width:1px;" class="row">
                        
                    
                    <div class="col-md-11 text-right">
    <br>
    <a href="{{url('licitar', [$peca->id])}}" class="btn btn-primary">Licitar</a>  
                                </div> 
                           
                    <div class="col-md-4 col-sm-4">
                        <img style="width:90%" src="/storage/img/{{$peca->img}}">
                    </div>
                    
                    <div class="col-md-8 col-sm-8 ">
                        <h3><a href="/novosLeiloes/{{$peca->id}}">{{$peca->nome}}</a></h3>
                        <h5>Descrição:{{$peca->descricao}}</h5>
                        <h5>Peso médio:{{$peca->peso_medio}}</h5>
                        <h5>Valor:{{$peca->valor}}</h5>
                        <h5>Estado:{{$peca->descricao_est}}</h5>
                        <h5>User:{{$peca->nome}}</h5>
                    
                        <h5>Maior licitação feita por:{{$peca->name}}</h5>
                        <h5>Artesão:{{$peca->nome}}</h5>
                        <h5>valor Licitação:{{$peca->valor_licitacao}}</h5>
                       
                        
                        <br>
                    </div>
            </div>
            </div>
        <br><br><br>
        @endforeach
      
    @else
        <p>Leilões não encontrados</p>
    @endif
@endsection