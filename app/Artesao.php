<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artesao extends Model
{
    protected $table = 'artesao';
    //
    public function peca(){
        return $this->hasMany('App\Peca');
    }
}
