<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableInvestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investasi', function (Blueprint $table) {
            $table->string('irr', 100)->nullable();
            $table->string('npv', 100)->nullable();
            $table->string('payback_period', 100)->nullable();
            $table->string('pic_name', 100)->nullable();
            $table->string('pic_position', 100)->nullable();
            $table->string('pic_image', 300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investasi', function (Blueprint $table) {
            //
        });
    }
}
