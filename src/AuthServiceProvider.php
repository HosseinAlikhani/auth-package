<?php
namespace D3CR33\Auth\Provider;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Resources', 'Auth');
        $this->publishes([
            __DIR__ . '/Public'    =>  public_path('src'),
        ], 'public');
    }

    public function register()
    {

    }
}