<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_proyecto', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('proyecto_id')->unsigned();
            $table->integer('categoria_id')->unsigned();

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
        Schema::dropIfExists('categoria_proyecto');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
