<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    use Notifiable;

    protected $fillable = [
        'nome', 'descricao', 'peso_medio', 'img', 'estado_id','users_id','artesao_id','valor'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
