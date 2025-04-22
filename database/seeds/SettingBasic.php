<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingBasic extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => 'Website Title',
            'value' => 'Vaganza'
        ]);

        DB::table('settings')->insert([
            'name' => 'Main Email',
            'value' => 'hi@vaganza.co.id'
        ]);
    }
}
