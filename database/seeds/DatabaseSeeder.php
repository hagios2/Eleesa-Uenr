<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);

        $this->call(SemestersTableSeeder::class);

        $this->call(LevelsTableSeeder::class);
    }
}
