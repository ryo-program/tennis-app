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
            'profile_img' => '',
        ]);
        DB::table('members')->insert([
            'name' => '錦織圭',
            'year' => '2',
            'shot' => 'バックハンドのダウンザライン',
            'comment' => 'テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。',
            'profile_img' => '',
        ]);
        DB::table('members')->insert([
            'name' => '錦織圭',
            'year' => '3',
            'shot' => 'バックハンドのダウンザライン',
            'comment' => 'テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。',
            'profile_img' => '',
        ]);
    }
}
