<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    // Define o nome da tabela a qual a model está associada
    protected $table = 'cidade';
    // Define quais colunas da tabela poderão ser preenchidas no create
    protected $fillable = ['nome', 'uf'];
}
