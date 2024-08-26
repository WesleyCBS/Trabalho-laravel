<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarefa;


class TarefaSeeder extends Seeder
{
    public function run()
    {
        // caso precise resetar use tarefa::truncate()  //

        tarefa::truncate();

        Tarefa::create(['titulo' => 'Tarefa', 'descricao' => 'Descrição da tarefa']);
        Tarefa::create(['titulo' => 'Tarefa', 'descricao' => 'Descrição da tarefa']);
        Tarefa::create(['titulo' => 'Tarefa', 'descricao' => 'Descrição da tarefa']);
    }
}