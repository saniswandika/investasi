<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Niki',
            'email' => 'niki@niki.com',
            'password' => Hash::make('Hello123'),
        ]);
    }
}
