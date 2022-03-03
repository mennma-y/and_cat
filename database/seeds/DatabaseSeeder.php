<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'tesuto data',
            'email' => 'a@a.test',
            'email_verified_at' => '2021-07-15 11:13:08',
            'password' => Hash::make('testtest'), // testtest
            'img_url' =>'test'
        ]);
    }
}
