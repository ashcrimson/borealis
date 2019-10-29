<?php

use Illuminate\Database\Seeder;
use App\Artists;
use App\Songs;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Artists::class, 5)->create()->each(function(Artists $artist){
            factory(Songs::class, 5)->create();

        });
    }
}
