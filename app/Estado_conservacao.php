<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_conservacao extends Model
{
    public function peca(){
        return $this->hasMany('App\Peca');
    }
}
