<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('opcion');
            $table->integer('pregunta_id')->unsigned();

        });

        Schema::table('opciones', function(Blueprint $table){
            $table->foreign('pregunta_id')
                ->references('id')
                ->on('preguntas')
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
        Schema::dropIfExists('opciones');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
