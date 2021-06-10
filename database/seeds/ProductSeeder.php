<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'ワサビ１',
            'content' => 'これはワサビです',
            'user_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび２',
            'content' => 'これはワサビです',
            'user_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび３',
            'content' => 'これはワサビです',
            'user_id' => '3',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび４',
            'content' => 'これはワサビです',
            'user_id' => '4',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび５',
            'content' => 'これはワサビです',
            'user_id' => '5',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび６',
            'content' => 'これはワサビです',
            'user_id' => '6',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび７',
            'content' => 'これはワサビです',
            'user_id' => '7',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび８',
            'content' => 'これはワサビです',
            'user_id' => '8',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび９',
            'content' => 'これはワサビです',
            'user_id' => '9',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび１０',
            'content' => 'これはワサビです',
            'user_id' => '10',
        ]);
        DB::table('products')->insert([
            'name' => 'わさび１１',
            'content' => 'これはワサビです',
            'user_id' => '11',
        ]);
    }
}
