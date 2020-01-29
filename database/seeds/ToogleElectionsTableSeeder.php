<?php

use Illuminate\Database\Seeder;
use App\ToggleElection;

class ToogleElectionSeedersTable extends Seeder
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
