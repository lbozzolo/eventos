<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->integer('categoria_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('grupos', function(Blueprint $table){
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
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
        Schema::dropIfExists('grupos');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
