<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('name', 500);
            $table->string('code', 20);
            $table->string('location', 255);
            $table->string('image', 255)->nullable();
            $table->string('lat', 500)->nullable();
            $table->string('long', 500)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('office_address', 1000)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('fax', 30)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('presdir', 100)->nullable();
            $table->string('director', 100)->nullable();
            $table->string('contact_person', 100)->nullable();
            $table->string('distance_to_jkt', 100)->nullable();
            $table->string('distance_to_harbour', 100)->nullable();
            $table->string('distance_to_airport', 100)->nullable();
            $table->string('total_area', 100)->nullable();
            $table->string('total_develop_area', 100)->nullable();
            $table->string('total_salable_area', 100)->nullable();
            $table->string('total_available_area', 100)->nullable();
            $table->string('facilities', 100)->nullable();
            $table->string('ui_ws_source', 100)->nullable();
            $table->string('ui_ws_capacity', 100)->nullable();
            $table->string('ui_el_source', 100)->nullable();
            $table->string('ui_el_capacity', 100)->nullable();
            $table->string('ui_tel_source', 100)->nullable();
            $table->string('ui_tel_capacity', 100)->nullable();
            $table->string('ui_fo_source', 100)->nullable();
            $table->string('ui_fo_capacity', 100)->nullable();
            $table->string('ui_gas_source', 100)->nullable();
            $table->string('ui_gas_capacity', 100)->nullable();
            $table->string('ei_selling_industrial_land', 100)->nullable();
            $table->string('ei_selling_warehouse', 100)->nullable();
            $table->string('ei_charge_service', 100)->nullable();
            $table->string('ei_charge_water', 100)->nullable();
            $table->string('ei_charge_electricity', 100)->nullable();
            $table->string('ei_charge_gas', 100)->nullable();
            $table->string('ei_charge_tel', 100)->nullable();
            $table->string('ei_charge_fo', 100)->nullable();
            $table->string('number_oc', 100)->nullable();
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
        Schema::dropIfExists('industries');
    }
}
