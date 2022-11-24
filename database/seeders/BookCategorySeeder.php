<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('book_category')->insert([
                'book_id' => $faker->numberBetween(1,7),
                'category_id' => $faker->numberBetween(1, 3)
            ]);
        }
    }
}
