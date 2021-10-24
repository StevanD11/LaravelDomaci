<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateKompanijaSedisteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kompanija', function (Blueprint $table) {
            $table->renameColumn('adresa', 'sediste');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kompanija', function (Blueprint $table) {
            $table->renameColumn('sediste', 'adresa');
        });
    }
}
