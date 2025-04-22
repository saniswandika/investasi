<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasi', function (Blueprint $table) {
            $table->increments('pub_id');
            $table->integer('users_id');
            $table->string('judul', 1000);
            $table->string('slug', 1000);
            $table->string('file', 350)->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('image', 350)->nullable();;
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
        Schema::dropIfExists('publikasi');
    }
}
