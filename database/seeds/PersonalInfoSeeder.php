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
            'email' => 'samanthak.graham@gmail.com',
            'github' => 'samanthakgraham',
            'website' => 'http://samanthacodes.com',
        ]);
    }
}
