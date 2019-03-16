<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    public $fillable = [
        'nome',
        'email',
        'telefone',
        'whatsapp',
        'endereco',
        'bairro',
        'cidade',
        'estado'
    ];
       
}
