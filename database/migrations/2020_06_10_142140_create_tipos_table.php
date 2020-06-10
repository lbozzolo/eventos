<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('slug')->unique();
        });

        Schema::table('proyectos', function (Blueprint $table) {
            $table->integer('tipo_id')->unsigned()->nullable()->after('estado_id');
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

        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn('tipo_id');
        });

        Schema::dropIfExists('tipos');

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
