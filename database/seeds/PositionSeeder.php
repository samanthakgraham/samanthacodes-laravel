<?php

use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position')->insert([
            'position_name' => 'Programmer-Analyst',
            'company' => 'Primaco',            
            'city' => 'Montreal',
            'date_started' => '2018-08-01',
            'date_left' => null,
        ]);

        DB::table('position')->insert([
            'position_name' => 'Software Developer',
            'company' => 'Clinemetrica',            
            'city' => 'Montreal',
            'date_started' => '2017-01-01',
            'date_left' => '2018-08-01',
        ]);

        DB::table('position')->insert([
            'position_name' => 'Programmer-Analyst',
            'company' => 'RAID',            
            'city' => 'Montreal',
            'date_started' => '2015-12-01',
            'date_left' => '2016-12-31',
        ]);

        DB::table('position')->insert([
            'position_name' => 'Full-Stack Web Developper',
            'company' => 'ADUXmedia',            
            'city' => 'Montreal',
            'date_started' => '2015-01-01',
            'date_left' => '2015-12-01',
        ]);

        DB::table('position')->insert([
            'position_name' => 'PHP Developper',
            'company' => 'Gorilla Group',            
            'city' => 'Montreal',
            'date_started' => '2014-05-01',
            'date_left' => '2014-12-01',
        ]);

        DB::table('position')->insert([
            'position_name' => 'Web Developper',
            'company' => 'AXA Assistance Canada',            
            'city' => 'Montreal',
            'date_started' => '2013-01-01',
            'date_left' => '2014-05-01',
        ]);

        DB::table('position')->insert([
            'position_name' => 'Technical Support',
            'company' => 'AXA Assistance Canada',            
            'city' => 'Montreal',
            'date_started' => '2012-04-01',
            'date_left' => '2013-01-01',
        ]);

        DB::table('position')->insert([
            'position_name' => 'iOS/Web Development Intern',
            'company' => 'Plank Multimedia',            
            'city' => 'Montreal',
            'date_started' => '2012-01-01',
            'date_left' => '2012-04-01',
        ]);

        DB::table('position')->insert([
            'position_name' => 'Technical Support Intern',
            'company' => 'AXA Assistance Canada',            
            'city' => 'Montreal',
            'date_started' => '2011-05-01',
            'date_left' => '2011-09-01',
        ]);

        DB::table('position')->insert([
            'position_name' => 'Technical Support Intern',
            'company' => 'Presagis',            
            'city' => 'Montreal',
            'date_started' => '2010-01-01',
            'date_left' => '2010-04-01',
        ]);
    }
}
