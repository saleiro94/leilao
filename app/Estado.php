<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $table = 'estado';
    public function peca(){
        return $this->hasMany('App\Peca');
    }
}
