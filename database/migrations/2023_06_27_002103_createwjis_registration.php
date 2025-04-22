<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatewjisRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wjisRegistration', function (Blueprint $table) {
            $table->id("Id");
            $table->string('name', 100);
            $table->string("email", 100);
            $table->string('position', 100);
            $table->string("company", 100);
            $table->string('investmentId', 100);
            $table->string("investmentName", 100);
            $table->string("country", 100);

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
        Schema::dropIfExists('wjisRegistration');
    }
}
