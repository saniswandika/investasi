<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->text('desc');
            $table->string('image', 300)->nullable();
            $table->string('peta', 300)->nullable();
            $table->string('jpk_men', 200)->nullable();
            $table->string('jpk_women', 200)->nullable();
            $table->string('ptk_tki', 200)->nullable();
            $table->string('ptk_tka', 200)->nullable();
            $table->string('djp_cv', 200)->nullable();
            $table->string('djp_fa', 200)->nullable();
            $table->string('djp_koperasi', 200)->nullable();
            $table->string('djp_pt', 200)->nullable();
            $table->string('ks_tanpa', 200)->nullable();
            $table->string('ks_a', 200)->nullable();
            $table->string('ks_b', 200)->nullable();
            $table->string('ks_c', 200)->nullable();
            $table->string('ks_d', 200)->nullable();
            $table->string('jkk', 200)->nullable();
            $table->string('tmd', 200)->nullable();
            $table->string('luas_tanah', 200)->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
