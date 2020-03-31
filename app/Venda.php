<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'valor',
        'quantidade'
    ];
}
