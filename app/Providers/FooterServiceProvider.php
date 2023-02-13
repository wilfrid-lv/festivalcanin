<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Information;
use Illuminate\Support\Facades\View;

class FooterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('partials.footer', function ($view) {
            $view->with('information', Information::first());
        });
    }
}
