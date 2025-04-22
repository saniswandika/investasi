<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWestJavaSectorManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('westJavaSectorManagement', function (Blueprint $table) {
            $table->id('Id');
            $table->string('title',255)->nullable();;
            $table->string('headline',255)->nullable();
            $table->text('content')->nullable();;
            $table->integer('isBahasa');
            $table->string('image',350)->nullable();;
            $table->integer('users_id');
            $table->string('slug',255);
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
        Schema::dropIfExists('westJavaSectorManagement');
    }
}
