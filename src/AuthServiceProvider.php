<?php
namespace D3CR33\Auth\Provider;

use Illuminate\Support\ServiceProvider;

/**
 * Class AuthServiceProvider
 * @package D3CR33\Auth\Provider
 * @author Hossein Alikhani
 */
class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Resources', 'Auth');
        $this->loadTranslationsFrom(__DIR__ . '/Lang','Auth-Lang');
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
        $this->publishes([
            __DIR__ . '/Public'    =>  public_path('src'),
        ], 'auth');
    }

    public function register()
    {

    }
}