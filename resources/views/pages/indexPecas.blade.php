@extends('layouts.app')

@section('content')
    <h1>Peças</h1>
    @if(count($pecas) > 0)
        @foreach($pecas as $peca)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$peca->img}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/novosLeiloes/{{$peca->id}}">{{$peca->nome}}</a></h3>
                        
                    </div>
                </div>
            </div>
        @endforeach
      
    @else
        <p>No posts found</p>
    @endif
@endsection