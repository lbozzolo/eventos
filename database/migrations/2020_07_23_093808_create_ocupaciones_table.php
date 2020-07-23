<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcupacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocupaciones', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nombre');
            $table->string('slug')->unique();

        });

        Schema::table('users', function (Blueprint $table) {
            $table->integer('ocupacion_id')->unsigned()->nullable()->after('localidad');
        });

        Schema::table('users', function(Blueprint $table){
            $table->foreign('ocupacion_id')
                ->references('id')
                ->on('ocupaciones')
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['ocupacion_id']);
            $table->dropColumn('ocupacion_id');
        });

        Schema::dropIfExists('ocupaciones');
    }
}
