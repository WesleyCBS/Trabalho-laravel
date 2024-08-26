<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = 'tarefa'; // Nome da tabela
    protected $fillable = ['titulo', 'descricao', 'data_de_entrega']; // Campos preenchíveis
    protected $dates = ['data_de_entrega']; // Campos de data
}
