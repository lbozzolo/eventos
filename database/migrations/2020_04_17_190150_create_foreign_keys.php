<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('proyectos', function(Blueprint $table){
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onUpdate('SET NULL')
                ->onDelete('SET NULL');
            $table->foreign('estado_id')
                ->references('id')
                ->on('estados')
                ->onUpdate('SET NULL')
                ->onDelete('SET NULL');
        });

        Schema::table('pdfs', function(Blueprint $table){
            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });

        Schema::table('iframes', function(Blueprint $table){
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
        //
    }
}