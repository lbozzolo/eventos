<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('proyecto_id')->unsigned();
            $table->integer('iframe_id')->unsigned()->nullable();
        });

        Schema::table('encuestas', function(Blueprint $table){
            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('iframe_id')
                ->references('id')
                ->on('iframes')
                ->onUpdate('SET NULL')
                ->onDelete('SET NULL');
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
        Schema::dropIfExists('encuestas');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
