<?php

use Illuminate\Database\Seeder;
use App\mensagem;

class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Mensagem::create([
            'titulo' => 'Mensagem 1',
            'texto' => 'Texto mensagem 1',
            'autor' => 'Autor texto 1',
            'user_id'=>1,
            'atividade_id'=>1
        ]);

        Mensagem::create([
            'titulo' => 'Mensagem 2',
            'texto' => 'Texto mensagem 2',
            'autor' => 'Autor texto 2',
            'user_id'=>1,
            'atividade_id'=>1
        ]);
    }
}
