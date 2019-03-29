<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    public $fillable = [
        'empresa',
        'email',
        'cnpj',
        'telefone',
        'site',
        'endereco',
        'cidade',
        'estado'
    ];
}
