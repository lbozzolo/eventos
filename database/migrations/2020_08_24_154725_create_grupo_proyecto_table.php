<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
        });

        Schema::table('grupo_proyecto', function(Blueprint $table){
            $table->foreign('grupo_id')
                ->references('id')
                ->on('grupos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
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
        Schema::dropIfExists('grupo_proyecto');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
