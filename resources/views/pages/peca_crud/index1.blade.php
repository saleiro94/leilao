@extends('layouts.app')

@section('content')
<br>
    <h2><strong>Peças</strong></h2>

    <div class="text-right">
    <a href="/filtrarLeiloes" class="btn btn-primary"> Filtrar </a>   
    </div>


    <br>
    @if(count($pecas) > 0)
   <?php $pecaTemp=0;?>

        @foreach($pecas as $peca)      
        @if($pecaTemp != $peca->peca_id)
            <div class="well">
                    <div style="background-color:white; box-shadow: 3px 3px 10px -2px grey; border-radius: 8px; margin-left:10px; margin-right:10px;" class="row ">
       @guest
           
       @else
       <div class="col-md-11 text-right">
                <br>
                <a href="{{url('licitar', [$peca->id])}}" class="btn btn-primary btn-lg">Licitar</a>  
        </div> 
        @endguest                 
                    <div class="col-md-4 col-sm-4">
                        <img style="width:90%" src="/storage/img/{{$peca->img}}">
                    </div>
                    
                    <div class="col-md-8 col-sm-8 ">
                        <h3><a href="/novosLeiloes/{{$peca->id}}">{{$peca->nome}}</a></h3>
                        <h5><strong>Descrição: </strong>{{$peca->descricao}}</h5>
                        <h5><strong>Peso médio: </strong>{{$peca->peso_medio}}</h5>
                        <h5><strong>Valor: </strong>{{$peca->valor}}</h5>
                        <h5><strong>Estado: </strong>{{$peca->descricao_est}}</h5>
                        <h5><strong>Valor Licitação: </strong>{{$peca->valor_licitacao}}</h5>
                       
                        
                        <br>
                    </div>
            </div>
            </div>
        <br>
        <?php $pecaTemp = $peca->peca_id;?>
        @endif
        @endforeach
      
    @else
        <p>Leilões não encontrados</p>
    @endif
@endsection