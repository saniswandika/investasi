<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyInvest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whyInvest', function (Blueprint $table) {
            $table->id('Id');
            $table->string('title',355);
            $table->string('highlight',355)->nullable();
            $table->string('slug', 355);
            $table->string('label',355)->nullable();
            $table->string('titleTwo',355)->nullable();
            $table->string('detailLabel',355)->nullable();
            $table->string('detailTitle',355)->nullable();
            $table->text('content');
            $table->integer('isActive');
            $table->integer('isBahasa');
            $table->string('imageSideBar',355); //image
            $table->string('detailImage',355); //image
            $table->string('bannerImage',355); //image
            $table->integer('users_id');

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
        Schema::dropIfExists('whyInvest');
    }
}
