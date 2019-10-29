<?php

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('artists')->insert([
            'nombre' => 'Oasis'
        ]);

        DB::table('artists')->insert([
            'nombre' => 'Smashing Pumpkins'
        ]);

        DB::table('artists')->insert([
            'nombre' => 'Green Day'
        ]);
    }
}
