<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidato';
    protected $fillable = ['nome', 'dataNasc', 'telefone', 'genero', 'cidade_id'];
}
