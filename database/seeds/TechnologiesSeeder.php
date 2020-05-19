<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technologies')->insert([
            'position_idx' => '2018_PRIM',
            'tech_name' => 'PHP5.6'
        ]);

        DB::table('technologies')->insert([
            'position_idx' => '2018_PRIM',
            'tech_name' => 'PHP7'
        ]);

        DB::table('technologies')->insert([
            'position_idx' => '2018_PRIM',
            'tech_name' => 'Codeigniter 3'
        ]);

        DB::table('technologies')->insert([
            'position_idx' => '2018_PRIM',
            'tech_name' => 'MSSQL'
        ]);

        DB::table('technologies')->insert([
            'position_idx' => '2018_PRIM',
            'tech_name' => 'IIS'
        ]);

        DB::table('technologies')->insert([
            'position_idx' => '2018_PRIM',
            'tech_name' => 'Git'
        ]);

        DB::table('technologies')->insert([
            'position_idx' => '2018_PRIM',
            'tech_name' => 'Composer'
        ]);

        DB::table('technologies')->insert([
            'position_idx' => '2018_PRIM',
            'tech_name' => 'Eloquent ORM'
        ]);

        DB::table('technologies')->insert([
            'position_idx' => '2018_PRIM',
            'tech_name' => 'JIRA'
        ]);
    }
}
