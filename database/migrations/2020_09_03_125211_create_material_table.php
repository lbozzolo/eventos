<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();
            $table->string('nombre')->nullable();
            $table->string('mime')->nullable();
            $table->string('author')->nullable();
            $table->string('area')->nullable();
            $table->string('path');
            $table->integer('proyecto_id')->unsigned()->nullable();
            $table->string('comision_id')->nullable();

            $table->index('id');
            $table->index('proyecto_id');

            $table->timestamps();
        });

        Schema::table('material', function(Blueprint $table){
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
        Schema::dropIfExists('material');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
