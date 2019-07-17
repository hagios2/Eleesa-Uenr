<?php

use Illuminate\Database\Seeder;
use App\Semesters;
class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semesters::create([
            'prog_id' => 1,
            'level_id' => 1,
            'sem' => 'CE 100 First Semester'
        ]);
       
        semesters::create([
            'prog_id' => 1,
            'level_id' => 1,
            'sem' => 'CE 100 Second Semester'
        ]);
       
        semesters::create([
            'prog_id' => 1,
            'level_id' => 2,
            'sem' => 'CE 200 First Semester'
        ]);
       
        semesters::create([
            'prog_id' => 1,
            'level_id' => 2,
            'sem' => 'CE 200 Second Semester'
        ]);
        
        semesters::create([
            'prog_id' => 1,
            'level_id' => 3,
            'sem' => 'CE 300 First Semester'
        ]);
       
        semesters::create([
            'prog_id' => 1,
            'level_id' => 3,
            'sem' => 'CE 300 Second Semester'
        ]);

        semesters::create([
            'prog_id' => 1,
            'level_id' => 4,
            'sem' => 'CE 400 First Semester'
        ]);
       
        semesters::create([
            'prog_id' => 1,
            'level_id' => 4,
            'sem' => 'CE 400 Second Semester'
        ]);

        semesters::create([
            'prog_id' => 2,
            'level_id' => 1,
            'sem' => 'EEE 100 First Semester'
        ]);
       
        semesters::create([
            'prog_id' => 2,
            'level_id' => 1,
            'sem' => 'EEE 100 Second Semester'
        ]);

        semesters::create([
            'prog_id' => 2,
            'level_id' => 2,
            'sem' => 'EEE 200 First Semester'
        ]);
       
        semesters::create([
            'prog_id' => 2,
            'level_id' => 2,
            'sem' => 'EEE 200 Second Semester'
        ]);

        semesters::create([
            'prog_id' => 2,
            'level_id' => 3,
            'sem' => 'EEE 300 First Semester'
        ]);
       
        semesters::create([
            'prog_id' => 2,
            'level_id' => 3,
            'sem' => 'EEE 300 Second Semester'
        ]);

        semesters::create([
            'prog_id' => 2,
            'level_id' => 4,
            'sem' => 'EEE 400 First Semester'
        ]);
       
        semesters::create([
            'prog_id' => 2,
            'level_id' => 4,
            'sem' => 'EEE 400 Second Semester'
        ]);
    }
}
