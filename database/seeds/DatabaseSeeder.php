<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(AgresTableSeeder::class);
        $this->call(FamillesTableSeeder::class);
        $this->call(ElementsTableSeeder::class);


    }
}
