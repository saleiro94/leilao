<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $table = 'regiao';
    
    protected $fillable = [
        'localizacao', 'codigo_postal', 'descricao'
    ];
}
