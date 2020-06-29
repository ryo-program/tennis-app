<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AdminsTableSeeder::class,
            PostsTableSeeder::class,
            MembersTableSeeder::class,
            QuestionsTableSeeder::class,
        ]);
    }
}
