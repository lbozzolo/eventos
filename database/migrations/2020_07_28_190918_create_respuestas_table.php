<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('encuesta_id')->unsigned();
            $table->integer('pregunta_id')->unsigned();
            $table->integer('opcion_id')->unsigned()->nullable();
            $table->text('texto')->nullable();

            $table->timestamps();
        });

        Schema::table('respuestas', function(Blueprint $table){
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('encuesta_id')
                ->references('id')
                ->on('encuestas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('pregunta_id')
                ->references('id')
                ->on('preguntas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('opcion_id')
                ->references('id')
                ->on('opciones')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('respuestas');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
