<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 7; $i++) {
            DB::table('books')->insert([
                'publisher_id' => $faker->numberBetween(1, 3),
                'title' => 'Book '.$i,
                'author' => $faker->name,
                'year' => $faker->numberBetween(2000,2022),
                'synopsis' => $faker->realText(200),
                'image' => 'cover.webp'
            ]);
        }
    }
}
