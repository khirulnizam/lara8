<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::table('trainings')->insert([
            'title'=>'Laravel Basics',
            'desc'=>'2 days Laravel course',
            'trainer'=>'Khirulnizam Abd Rahman',
        ]);

        DB::table('trainings')->insert([
            'title'=>'Laravel Intermediate',
            'desc'=>'2 days Laravel course Intermediate Level',
            'trainer'=>'Tarmizi Sanusi',
        ]);

        DB::table('trainings')->insert([
            'title'=>'Laravel Advanced with Unit Test',
            'desc'=>'2 days Laravel course Advanced with Unit Test',
            'trainer'=>'Nasrul Hazim',
        ]);

        DB::table('trainings')->insert([
            'title'=>'Flutter',
            'desc'=>'3 days Multiplatform Mobile Development Course using Flutter',
            'trainer'=>'Khirulnizam Abd Rahman',
        ]);

        DB::table('trainings')->insert([
            'title'=>'Ionic',
            'desc'=>'3 days Hybrid Multiplatform Mobile Development Course using Ionic Framework',
            'trainer'=>'Khirulnizam Abd Rahman',
        ]);

        DB::table('trainings')->insert([
            'title'=>'PHP&MYSQL',
            'desc'=>'3 days Web Development Course using PHP&MYSQL',
            'trainer'=>'Khirulnizam Abd Rahman',
        ]);
    }
}
