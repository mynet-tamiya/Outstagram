<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fakerを使う
        $faker = Faker\Factory::create('ja_JP');

        // 固定ユーザーを作成
        DB::table('articles')->insert([
            'name' => 'daiki',
            'password' => bcrypt('1234'),
            'userid' => 'tamiya',
        ]);
        DB::table('articles')->insert([
            'name' => 'foo',
            'password' => bcrypt('1234'),
            'userid' => 'hoge',
        ]);
    }
}
