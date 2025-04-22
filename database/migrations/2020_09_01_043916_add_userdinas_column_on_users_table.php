<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserdinasColumnOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('nama_dinas')->nullable();
            $table->text('alamat')->nullable();
            $table->char('logo_dinas')->nullable();
            $table->string('nip_cp', '50')->nullable();
            $table->string('telp','50')->nullable();
            $table->string('gender','10')->nullable();
            $table->string('posisi_cp','25')->nullable();
            $table->string('slug','30')->nullable();
            $table->string('company_city','50')->nullable();
            $table->string('company_field','250')->nullable();
            $table->string('company_sector','250')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nama_dinas', 'alamat', 'logo_dinas', 'nip_cp', 'telp', 'gender', 'posisi_cp']);
        });
    }
}
