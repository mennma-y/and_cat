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
        //     'name' => 'tesuto data',
        //     'email' => 'a@a.test',
        //     'email_verified_at' => '2021-07-15 11:13:08',
        //     'password' => Hash::make('testtest'), // testtest
        //     'img_url' =>'test'
        // ]);
        // DB::table('cats')->insert([
        //     'name' =>'太郎',
        //     'type' =>'tesuto',
        //     'user_id' =>'4',
        //      'gender' =>'1',
        //      'age'=>'16',
        //     'area'=>'福岡',
        //     'slogan'=>'tesuto',
        //     'introduction'=>'tesuto'
        // ]);
    //   DB::table('users')->insert([
    //         'name' => 'tesuto taro',
    //         'email' => 'a@b.taro',
    //         'email_verified_at' => '2021-08-15 11:13:08',
    //         'password' => Hash::make('tarotaro'), 
    //         'img_url' =>'taro'
    //     ]);
      DB::table('cats')->insert([
            'name' =>'次郎',
            'type' =>'tesuto',
            'user_id' =>'3',
             'gender' =>'1',
             'age'=>'16',
            'area'=>'福岡',
            'slogan'=>'tesuto',
            'introduction'=>'tesuto'
        ]);
    }
}
