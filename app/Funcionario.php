<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'nome',
        'nomeusuario',
        'cidade',
        'pais',
        'cep',
        'endereco',
        'email',
        'cep'

    ];
}
