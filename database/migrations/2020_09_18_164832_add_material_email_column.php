<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaterialEmailColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('material', function (Blueprint $table) {
            $table->string('email')->nullable()->after('author');
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

        Schema::table('material', function (Blueprint $table) {
            $table->dropColumn('email');
        });

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
