<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Route;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        echo "asasasasas";
        Route::get('/menu', funcion() {
            return view('menu');
        });
    }
}
