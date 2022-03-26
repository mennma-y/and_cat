<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'テストデータ1(一般)',
                'email' => 'a@g.taro',
                'password' => Hash::make('tarotaro'),
                'admin_confirmation' =>'0',
                'img_url' => '/storage/images/defaultImage.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
             [
                'id' => '2',
                'name' => 'テストデータ2(団体)',
                'email' => 'a@g.dantaitaro',
                'password' => Hash::make('tarotaro'),
                'admin_confirmation' =>'1',
                'img_url' => '/storage/images/defaultImage.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
             [
                'id' => '3',
                'name' => 'テストデータ3(団体)',
                'email' => 'a@g.dantaijiro',
                'password' => Hash::make('tarotaro'),
                'admin_confirmation' =>'1',
                'img_url' => '/storage/images/defaultImage.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
        ]);
    }
}
