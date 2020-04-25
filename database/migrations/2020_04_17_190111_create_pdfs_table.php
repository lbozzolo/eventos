<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdfs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('path');
            $table->integer('proyecto_id')->unsigned()->nullable();

            $table->index('id');
            $table->index('proyecto_id');

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
        Schema::dropIfExists('pdfs');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
