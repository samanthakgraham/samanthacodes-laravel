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
        $this->call(UserSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(TaskDescriptionSeeder::class);
        $this->call(PersonalInfoSeeder::class);
        $this->call(TechnologiesSeeder::class);
    }
}
