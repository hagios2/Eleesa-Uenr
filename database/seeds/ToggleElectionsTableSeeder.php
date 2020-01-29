<?php

use App\ToggleElection;
use Illuminate\Database\Seeder;

class ToggleElectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ToggleElection::create(['toggle' => false]);
    }
}
