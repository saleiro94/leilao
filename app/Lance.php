<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lance extends Model
{
    protected $table = 'lance';
    public function users(){
        return $this->belongsTo('App\User'); 
    }
    public function peca(){
        return $this->belongsTo('App\User'); 
    }
}
