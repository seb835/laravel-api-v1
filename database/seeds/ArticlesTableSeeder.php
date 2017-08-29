<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing records
        Article::truncate();

        $faker = \Faker\Factory::create();

        // Create some records
        for ($i=0; $i<50; $i++) {
          Article::create([
            'title' => $faker->sentence,
            'body' => $faker->paragraph
          ]);
        }
    }
}
