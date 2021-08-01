<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('trainers')->insert([
            'trainerweb'=>'http://khirulnizam.com',
            'trainerexpert'=>'Web & Mobile Development',
            'trainername'=>'Khirulnizam Abd Rahman',
        ]);
        //
        DB::table('trainers')->insert([
            'trainerweb'=>'http://nasrulhazim.com',
            'trainerexpert'=>'JSON API & Backend Development',
            'trainername'=>'Khirulnizam Abd Rahman',
        ]);

        DB::table('trainers')->insert([
            'trainerweb'=>'http://tarsoft.co',
            'trainerexpert'=>'Cloud Deployment & System Integration',
            'trainername'=>'Tarmizi Sanusi',
        ]);
    }
}
