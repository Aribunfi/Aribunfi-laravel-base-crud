<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Models\Music;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10; $i++) {
            $newMusic = new Music();
            $newMusic->title = $faker->word();
            $newMusic->album = $faker->word();
            $newMusic->author = $faker->name();
            $newMusic->editor = $faker->name();
            $newMusic->length = $faker->name();
            $newMusic->poster = $faker->imageUrl(640, 480, 'singers', true);

            $newMusic->save();
        }
    }
}
