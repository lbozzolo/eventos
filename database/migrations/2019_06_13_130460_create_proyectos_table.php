<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('nombre');
            $table->text('descripcion')->nullable();
            $table->text('responsable')->nullable();
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->tinyInteger('publico')->nullable();
            $table->integer('estado_id')->unsigned()->nullable();
            $table->dateTime('fecha')->nullable();

            $table->timestamps();

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
        Schema::dropIfExists('proyectos');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
