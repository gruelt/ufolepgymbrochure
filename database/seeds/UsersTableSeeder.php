<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'TomTom',
            'email' => 'gruelt@gmail.com',
            'password' => '$2y$10$Srb2qTjJSsP/yYhoZMQXzuuN2TYU6MGWAP4eNI48iYMfb748MPdyC',
            'email_verified_at' => '2019-04-29 09:35:39',
            'role_id'=>1,



        ]);
    }
}
