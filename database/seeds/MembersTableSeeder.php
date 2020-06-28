<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('members')->insert([
            'name' => '錦織圭',
            'year' => '1',
            'shot' => 'バックハンドのダウンザライン',
            'comment' => 'テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。',
            'profile_img' => '1593222434marliese-streefland-2l0CWTpcChI-unsplash (1).jpg',
        ]);
        DB::table('members')->insert([
            'name' => '錦織圭',
            'year' => '2',
            'shot' => 'バックハンドのダウンザライン',
            'comment' => 'テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。',
            'profile_img' => '1593225175alexandru-rotariu-o_QTeyGVWjQ-unsplash.jpg',
        ]);
        DB::table('members')->insert([
            'name' => '錦織圭',
            'year' => '3',
            'shot' => 'バックハンドのダウンザライン',
            'comment' => 'テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。',
            'profile_img' => '1593232062159279143983901573.png',
        ]);
    }
}
