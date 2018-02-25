<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           //Create Blog Posts
        $path = 'db_blog_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Blog Posts seeded!');


    }
}
