<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vaga';
    protected $fillable = ['nome', 'descricao', 'tipoContratacao', 'empresa_id', 'cidade_id'];
}
