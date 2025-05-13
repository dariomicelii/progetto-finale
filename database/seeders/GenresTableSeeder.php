<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Genre;
use Faker\Generator as Faker;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $genres = ['Rock', 'Pop', 'Jazz', 'Classical', 'Hip-Hop', 'Country', 'Reggae', 'Blues', 'Electronic', 'Folk'];
        foreach ($genres as $genre) {
            $newGenre = new Genre();

            $newGenre->name = $genre;
            $newGenre->description = $faker->sentence();

            $newGenre->save();
        }
    }
}
