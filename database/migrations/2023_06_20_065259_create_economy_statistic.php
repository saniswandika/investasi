<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomyStatistic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economyStatistic', function (Blueprint $table) {
            $table->id("Id");
            $table->string('inflation', 100);
            $table->date("inflationDate");
            $table->string('economicGrowth', 100);
            $table->date("economicGrowthDate");
            $table->string('westJavaExport', 100);
            $table->date("westJavaExportDate");

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
        Schema::dropIfExists('economyStatistic');
    }
}
