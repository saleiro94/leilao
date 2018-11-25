<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    use Notifiable;

    protected $fillable = [
        'nome', 'descricao', 'peso_medio', 'estado_id','artesao_id','valor'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
