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

        // // Lazily
        // Inertia::share('user', fn (Request $request) => $request->user()
        //     ? $request->user()->only('id', 'name', 'email')
        //     : null
        // );
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
