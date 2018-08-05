<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadesCompradoras extends Model
{
    protected $fillable = ['codigo', 'uge', 'orgao', 'gestao', 'nome', 'endereco', 'cep', 'email', 'telefone1',
        'telefone2', 'fax', 'cnpj'];
}
