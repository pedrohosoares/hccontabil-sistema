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
        'cidade',
        'estado'
    ];

    public static function pesquisa($pesquisar){
        return static::where('nome', 'LIKE', '%' . $pesquisar . '%')->paginate(10);
    }
       
}
