<?php

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            'university' => 'Concordia University',
            'degree' => 'BCompSci',
            'program' => 'Computer Science',
            'city' => 'Montreal',
            'year_completed' => 2017,
        ]);

        DB::table('education')->insert([
            'university' => 'CÉGEP Vanier',
            'degree' => 'DEC',
            'program' => 'Computer Science Technology',
            'city' => 'Montreal',
            'year_completed' => 2010,
        ]);
    }
}
