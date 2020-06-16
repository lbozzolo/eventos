<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('codigos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proyecto_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('code')->unique();
            $table->timestamps();
        });

        Schema::table('codigos', function(Blueprint $table){
            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('codigos');
    }
}
