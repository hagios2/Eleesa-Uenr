<?php

namespace App\Providers;
use Validator;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            
        view()->composer(['elections.election', 'elections.policy', 'candidates.candidate'], function($view){

            $view->with('toggleApp', \App\ToggleElection::find(1));
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
