<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_info')->insert([
            'first_name' => 'Samantha',
            'last_name' => 'Graham',
            'city' => 'Montreal',
            'country' => 'Canada',
            'email' => 'samantha@samanthacodes.com',
            'github' => 'https://github.com/samanthakgraham',
            'linkedin' => 'https://www.linkedin.com/in/samantha-graham-339b6b37',
            'website' => 'http://samanthacodes.com',
        ]);
    }
}
