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
        Schema::table('profiles', function(Blueprint $table){
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('dieta_catogenica_id')
                ->references('id')
                ->on('dietas_catogenicas')
                ->onUpdate('SET NULL')
                ->onDelete('SET NULL');
        });

        Schema::table('dietas', function(Blueprint $table){
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });

        Schema::table('semanas', function(Blueprint $table){
            $table->foreign('dieta_id')
                ->references('id')
                ->on('dietas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });

        Schema::table('dias', function(Blueprint $table){
            $table->foreign('semana_id')
                ->references('id')
                ->on('semanas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });

        Schema::table('comidas', function(Blueprint $table){
            $table->foreign('dia_id')
                ->references('id')
                ->on('dias')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('receta_id')
                ->references('id')
                ->on('recetas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });

        Schema::table('pasos', function(Blueprint $table){
            $table->foreign('receta_id')
                ->references('id')
                ->on('recetas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });

        Schema::table('ingrediente_receta', function(Blueprint $table){
            $table->foreign('receta_id')
                ->references('id')
                ->on('recetas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('ingrediente_id')
                ->references('id')
                ->on('ingredientes')
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