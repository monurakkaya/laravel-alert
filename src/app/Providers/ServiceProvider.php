<?php
/**
 * Created by PhpStorm.
 * User: monur
 * Date: 18.08.2018
 * Time: 21:57
 */

namespace Monurakkaya\LaravelAlert\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views/laravel-alert', 'laravel-alert');
        $this->publishes([
           __DIR__.'/../../public' => public_path('laravel-alert/'),
            __DIR__.'/../../config/laravel-alert.php' => config_path('laravel-alert.php'),
            __DIR__.'/../../resources/lang' => resource_path('lang')
        ], 'laravel-alert');
    }
}
