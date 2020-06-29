<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'name'              => '管理者',
            'email'             => 'admin@example.com',
            'password'          => Hash::make('1234'),
            'remember_token'    => Str::random(10),
        ]);
    }
}
