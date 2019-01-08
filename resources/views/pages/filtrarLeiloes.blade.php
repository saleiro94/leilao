@extends('layouts.app')

@section('content')
<br>
<br>
{!! Form::open(['action' => 'FiltrarController@filtrar', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
<div class="row col-sm-12 card">
    <div class="container">
        
            <h2>Preço</h2>
            <br>
            <div class="checkbox">
            <label>0-50&nbsp;{{Form::checkbox('menor50')}}</label>
            </div>
            <div class="checkbox">
            <label>50-100&nbsp;{{Form::checkbox('menor100')}}</label>
            </div>
            <div class="checkbox">
            <label>100+&nbsp;{{Form::checkbox('maior100')}}</label>
            </div>
       
    </div>
</div>
<br>
<br>
<br>
<div class="row col-md-12 card" >
    <div class="container">
    <h2 class="text-center">Estado de Conservação</h2>
    <div class="col-md-12" >
        <div class="row">
            <div class="col-sm-6">
               
                    <br>
                    <div class="checkbox">
                        <label>Novo&nbsp;{{Form::checkbox('novo')}}</label>
                    </div>
                    <div class="checkbox">
                        <label>Novo, Sem Falhas&nbsp;{{Form::checkbox('novoSem')}}</label>
                    </div>
                    <div class="checkbox">
                        <label>Novo, Com Falhas&nbsp;{{Form::checkbox('novoCom')}}</label>
                    </div>
              
            </div>
            <div class="col-sm-6 text-right">
               
                    <div class="checkbox ">
                        <br>    
                        <label>Usado, Sem Falhas&nbsp;{{Form::checkbox('usadoSem')}}</label>
                    </div>
                    <div class="checkbox">
                        <label>Usado, com Ligeiras Falhas&nbsp;{{Form::checkbox('usadoCom')}}</label>
                    </div>
                    <div class="checkbox">
                        <label>Usado, com Debilidades&nbsp;{{Form::checkbox('usado')}}</label>
                    </div>
                
            </div>
        </div>
    </div>
    </div>
</div>
    <br>
    <br>
    <br>

    <div class="row col-sm-12 card">
        <div class="container">
            <h2>Inseridos</h2>
              
                    <br>
                    <div class="checkbox">
                    <label>Mais Recentes&nbsp;{{Form::checkbox('recente','', ['id' => 'novo']) }}</label>
                    </div>
                    <div class="checkbox">
                    <label>Mais Antigos&nbsp;{{Form::checkbox('recente'), array('id'=>'novo')}}</label>
                   
                    </div>
               
        </div> 
    </div>
    <br>

    <div class="col-md-12 text-right">
        
        {{Form::submit('Inserir', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection