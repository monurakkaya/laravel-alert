<?php
/**
 * Created by PhpStorm.
 * User: monur
 * Date: 18.08.2018
 * Time: 21:57
 */

namespace Monurakkaya\LaravelAlert\Providers;

use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'laravel-alert');
        $this->loadViewsFrom(__DIR__.'/../../resources/views/laravel-alert', 'laravel-alert');
    }
}
