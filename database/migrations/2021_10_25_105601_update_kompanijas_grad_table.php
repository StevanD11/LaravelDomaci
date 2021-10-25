<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateKompanijasGradTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kompanijas', function (Blueprint $table) {
            $table->after('sediste', function ($table) {
                $table->string('grad');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kompanijas', function (Blueprint $table) {
            $table->dropColumn('grad');
        });
    }
}
