<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('proyecto_id')->unsigned();
            $table->string('nombre')->nullable();
            $table->string('texto', 255)->nullable();
            $table->string('ip_address' )->nullable();
            $table->tinyInteger('archivado' )->nullable();

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
        Schema::dropIfExists('consultas');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
