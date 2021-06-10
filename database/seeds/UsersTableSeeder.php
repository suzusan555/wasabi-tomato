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
        DB::table('users')->insert([
            'name' => '田中',
            'email' => 'tanaka@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '鈴木',
            'email' => 'suzuki@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '佐藤',
            'email' => 'satou@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '吉田',
            'email' => 'yosida@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '宮本',
            'email' => 'miyamoto@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'トヨタ',
            'email' => 'toyota@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '松田',
            'email' => 'matuda@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '大石',
            'email' => 'oosisi@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '西田',
            'email' => 'nisida@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '船越',
            'email' => 'funakosi@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '田島',
            'email' => 'tajima@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => '大木',
            'email' => 'ooki@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
    }
}
