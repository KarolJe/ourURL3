<?php

namespace Projektlaravel\ourURL;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class ourUrlServiceProvider extends ServiceProvider
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
        //$this->app->make('Projektlaravel\ourURL\ourUrlController');
    }

    public static function isActiveRoute($route, $output = "active"){
        if (Route::currentRouteName() == $route) return $output;
    }

    public static function isActiveRouteCategory($route, $category, $output = "active"){
        $a = \Request::segment(2);
        if (Route::currentRouteName() == $route && $a == $category) return $output;
    }
}
