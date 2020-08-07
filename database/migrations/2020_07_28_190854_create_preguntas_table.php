<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('clase');
            $table->integer('encuesta_id')->unsigned();
        });

        Schema::table('preguntas', function(Blueprint $table){
            $table->foreign('encuesta_id')
                ->references('id')
                ->on('encuestas')
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
        Schema::dropIfExists('preguntas');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
