@extends('layouts.app')

@section('content')
<br>
<br>
<div class="row col-sm-12 card">
    <div class="container">
        <form>
            <h2>Preço</h2>
            <br>
            <div class="checkbox">
            <label>0-50&nbsp;<input type="checkbox" value=""></label>
            </div>
            <div class="checkbox">
            <label>50-100&nbsp;<input type="checkbox" value=""></label>
            </div>
            <div class="checkbox disabled">
            <label>100+&nbsp;<input type="checkbox" value=""></label>
            </div>
        </form>
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
                <form>
                    <br>
                    <div class="checkbox">
                        <label>Novo&nbsp;<input type="checkbox" value=""></label>
                    </div>
                    <div class="checkbox">
                        <label>Novo, Sem Falhas&nbsp;<input type="checkbox" value=""></label>
                    </div>
                    <div class="checkbox disabled">
                        <label>Novo, Com Falhas&nbsp;<input type="checkbox" value=""></label>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 text-right">
                <form>
                    <div class="checkbox ">
                        <br>    
                        <label>Usado, Sem Falhas&nbsp;<input type="checkbox" value=""></label>
                    </div>
                    <div class="checkbox">
                        <label>Usado, com Ligeiras Falhas&nbsp;<input type="checkbox" value=""></label>
                    </div>
                    <div class="checkbox disabled">
                        <label>Usado, com Debilidades&nbsp;<input type="checkbox" value=""></label>
                    </div>
                </form>
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
                <form>
                    <br>
                    <div class="checkbox">
                    <label>Mais Recentes&nbsp;<input type="checkbox" value=""></label>
                    </div>
                    <div class="checkbox">
                    <label>Mais Antigos&nbsp;<input type="checkbox" value=""></label>
                    </div>
                </form>
        </div> 
    </div>
    <br>

    <div class="col-md-12 text-right">
        <a href="" class="btn btn-primary">Confirmar</a>  
    </div>
@endsection