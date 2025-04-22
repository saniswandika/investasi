<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investasi', function (Blueprint $table) {
            $table->increments('invest_id');
            $table->integer('users_id');
            $table->integer('fk_sector')->nullable();
            $table->string('judul_investasi', 255);
            $table->string('image', 360)->nullable();
            $table->string('mini_deskripsi', 1000);
            $table->string('project_value', 50);
            $table->string('kategori', 50);
            $table->string('total_contact', 255)->nullable();
            $table->string('lokasi', 500);
            $table->string('long', 300)->nullable();
            $table->string('lat', 300)->nullable();
            $table->text('project_desc');
            $table->text('invest_scheme');
            $table->string('support_file', 360)->nullable();
            $table->integer('isBahasa')->nullable();
            $table->string('slug', 200)->nullable();
            $table->string('author', 100)->nullable();
            $table->string('job_title', 200)->nullable();
            $table->string('investment_type', 100)->nullable();
            $table->string('author_image', 360)->nullable();

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
        Schema::dropIfExists('investasi');
    }
}
