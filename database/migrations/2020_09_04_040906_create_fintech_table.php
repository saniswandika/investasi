<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFintechTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fintech', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_fintech', 50);
            $table->string('logo_fintech', 360)->nullable();
            $table->string('lokasi_fintech', 350);
            $table->string('website', 360)->nullable();
            $table->string('perusahaan', 360)->nullable();
            $table->string('register', 360)->nullable();
            $table->string('tanggal_reg', 360)->nullable();
            $table->string('slug', 200)->nullable();
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
        Schema::dropIfExists('fintech');
    }
}
