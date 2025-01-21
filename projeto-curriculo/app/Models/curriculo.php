<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\hasFactory;


class curriculo extends Model
{
    use hasFactory;

    protected $table = 'curriculo'; 
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cargo_desejado',
        'escolaridade',
        'observacoes',
        'arquivo',
        'ip'
    ];
}
