<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactus', function (Blueprint $table) {
            $table->id('Id');
            $table->string('name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('position', 255)->nullable();
            $table->string('company', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('project_interest', 255)->nullable();
            $table->integer('users_id')->nullable();
            $table->string('slug', 255)->nullable();;
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
        //
    }
}
