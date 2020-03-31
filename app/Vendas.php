<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'valor',
        'quantidade'
    ];
}
