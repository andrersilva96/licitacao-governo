<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $fillable = ['codigo', 'nome', 'uf'];
}
