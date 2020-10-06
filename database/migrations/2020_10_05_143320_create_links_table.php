<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre')->nullable();
            $table->string('url', 255)->nullable();
            $table->integer('proyecto_id')->unsigned()->nullable();
            $table->integer('iframe_id')->unsigned()->nullable();

            $table->timestamps();
        });

        Schema::table('links', function(Blueprint $table){
            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('iframe_id')
                ->references('id')
                ->on('iframes')
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
        Schema::dropIfExists('links');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
