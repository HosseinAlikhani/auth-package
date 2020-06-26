<?php
namespace D3CR33\Auth\Provider;

use D3CR33\Auth\Routes\RouteRegister;
use Illuminate\Support\Facades\Route;

class Auth
{
    public static function routes($callback = null, array $options = [])
    {
        $callback = $callback ? : function($router) {
            $router->all();
        };

        $defaultOptions = [
            'namespace' =>  '\D3CR33\Auth\Http\Controllers',
            'prefix'    =>  ''
        ];

        $options = array_merge($defaultOptions, $options);

        Route::group($options, function ($router) use ($callback){
            $callback(new RouteRegister($router));
        });
    }
}