<?php

use App\Cat;
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
     
  
        // DB::table('users')->insert([
        //     'name' => 'テスト太郎',
        //     'email' => 'a@g.taro',
        //     'email_verified_at' => '2021-08-15 11:13:08',
        //     'password' => Hash::make('tarotaro'), 
        //     'admin_confirmation' =>'0',
        //     'img_url' =>'taro'
        // ]);
       




      DB::table('cats')->insert([
            'name' =>'taroneko',
            'type' =>'tesuto',
            'user_id' =>'1',
             'gender' =>'1',
             'age'=>'16',
            'area'=>'福岡',
            'slogan'=>'tesuto',
            'introduction'=>'tesuto'
        ]);
    }
}
