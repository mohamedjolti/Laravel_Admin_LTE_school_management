<?php

namespace App\Providers;

use App\Models\groupe;
use Illuminate\Support\Facades\View as View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer(["Partials.student.*"],function($view){
               $view->with("groupes",groupe::all());
        });
    }
}
