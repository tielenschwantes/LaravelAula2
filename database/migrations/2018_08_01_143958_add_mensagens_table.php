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
        Schema::create('mensagens', function (Blueprint $table) {
            $table->increments('id');           //código identificador
            $table->string('titulo');            //título da atividade
            $table->string('texto');      //descrição da atividade
            $table->string('autor');
            $table->integer('user_id')->unsigned();
            $table->integer('atividade_id')->unsigned();
            $table->timestamps();               //registro created_at e updated_at
            //
        });

        Schema::table('mensagens', function($table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('atividade_id')->references('id')->on('atividades');
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
           
        });
    }
}
