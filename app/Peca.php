<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $table = 'peca';
    use Notifiable;

    protected $fillable = [
        'nome', 'descricao', 'peso_medio','valor','img','estado_id','users_id','artesao_id'
    ];
    
   
}
