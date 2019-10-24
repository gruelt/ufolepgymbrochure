<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('genres')->insert([
            'id' => '1',
            'name' => 'Masculin',
            'shortname' => 'M',
            'description'=> 'Garçons'
        ]);

        DB::table('genres')->insert([
            'id' => '2',
            'name' => 'Féminin',
            'shortname' => 'F',
            'description'=> 'Filles'
        ]);

    }
}
