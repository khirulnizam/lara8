<?php

namespace Database\Seeders;

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
        //create 10 users dummy data
        \App\Models\User::factory(10)->create();
        // $this->call(UsersTableSeeder::class);
        $this->call(TrainersSeeder::class);
        $this->call(TrainingsSeeder::class);
    }
}
