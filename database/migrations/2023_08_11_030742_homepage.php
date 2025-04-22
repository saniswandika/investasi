<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Homepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->id('Id');
            $table->string('title',255)->nullable();;
            $table->string('bannerText',255)->nullable();
            $table->integer('isBahasa');
            $table->string('bannerImage',350)->nullable();;
            $table->string('whyInvestImage',350)->nullable();;
            $table->string('sectorImage',350)->nullable();;
            $table->string('findInvestImage',350)->nullable();;
            $table->integer('users_id');
            $table->string('slug',255)->nullable();;
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
        Schema::dropIfExists('homepage');
    }
}
