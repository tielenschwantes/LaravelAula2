<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMensagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mensagens', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensagens', function (Blueprint $table) {
            $table->increments('id');           //código identificador
            $table->string('titulo');            //título da atividade
            $table->string('texto');      //descrição da atividade
            $table->string('autor');
            $table->dateTime('scheduledto');    //agendado para
            $table->timestamps();               //registro created_at e updated_at
            //
        });
    }
}
