<?php

namespace App\Providers;

use Inertia\Inertia;
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
        
        // Synchronously
        Inertia::share('appName', config('app.name'));

        Inertia::share('errors', function () {
            return session()->get('errors') 
                    ? session()->get('errors')->getBag('default')->getMessages() 
                    : (object) [] ;
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
