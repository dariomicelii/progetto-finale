<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Record;

use Faker\Generator as Faker;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i < 10; $i++) {

            $newRecord = new Record();

            $newRecord->title = $faker->sentence(2);
            $newRecord->artist = $faker->name();
            $newRecord->genre_id = rand(1, 10);
            $newRecord->year = $faker->dateTimeBetween('-50 years', 'now')->format('Y');

            $newRecord->save();

        }
    }
}
