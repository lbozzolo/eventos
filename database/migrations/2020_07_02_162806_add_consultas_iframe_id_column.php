<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConsultasIframeIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consultas', function (Blueprint $table) {
            $table->integer('iframe_id')->unsigned()->nullable()->after('proyecto_id');
        });

        Schema::table('consultas', function(Blueprint $table){
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

        Schema::table('consultas', function (Blueprint $table) {
            $table->dropColumn('iframe_id');
        });

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
