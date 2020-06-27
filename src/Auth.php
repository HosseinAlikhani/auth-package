<?php
namespace D3CR33\Auth\Provider;

use D3CR33\Auth\Routes\RouteRegister;
use Illuminate\Support\Facades\Route;

/**
 * Class Auth
 * @package D3CR33\Auth\Provider
 * @author Hossein Alikhani
 */
class Auth
{
    /**
     * register route to application
     * @param  null  $callback
     * @param  array  $options
     */
    public static function routes($callback = null, array $options = [])
    {
        $callback = $callback ? : function($router) {
            $router->all();
        };

        $defaultOptions = [
            'namespace' =>  '\D3CR33\Auth\Http\Controllers',
            'prefix'    =>  '',
            'middleware'    =>  ['web']
        ];

        $options = array_merge($defaultOptions, $options);

        Route::group($options, function ($router) use ($callback){
            $callback(new RouteRegister($router));
        });
    }
}