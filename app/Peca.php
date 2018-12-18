<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $table = 'peca';
    use Notifiable;

    protected $fillable = [
        'nome', 'descricao', 'peso_medio','valor','img','estado_conservacaos_id','users_id','artesao_id'
    ];
    
    public function users(){
        return $this->belongsTo('App\User'); 
    }

    public function estado_conservacaos(){
        return $this->belongsTo('App\Estado_conservacao');
    }

    public function artesao(){
        return $this->belongsTo('App\Artesao');
    }

}
