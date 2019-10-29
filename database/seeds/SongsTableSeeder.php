<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('songs')->insert([
            'titulo' => 'Supersonic',
            'artist_id' => 1,
            'duracion' => 4,
        ]);

        DB::table('songs')->insert([
            'titulo' => 'Zero',
            'artist_id' => 2,
            'duracion' => 3,
        ]);

        DB::table('songs')->insert([
            'titulo' => 'Jaded',
            'artist_id' => 3,
            'duracion' => 1,
        ]);
    }
}
