<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id('Id');
            $table->string('title',255);
            $table->string('headline',255);
            $table->string('place',255)->nullable();
            $table->dateTime('eventDate');
            $table->text('content');
            $table->integer('isActive');
            $table->integer('isBahasa');
            $table->string('image',350);
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
        Schema::dropIfExists('agenda');
    }
}
