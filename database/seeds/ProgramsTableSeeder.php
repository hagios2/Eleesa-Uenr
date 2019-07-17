<?php

use Illuminate\Database\Seeder;
use App\Programs;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Programs::create([
            'program' => 'Computer Engineering'
        ]);

        Programs::create([
            'program' => 'Electrical Engineering'
        ]);
    }
}
