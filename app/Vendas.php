<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'quantidade'
    ];
}
