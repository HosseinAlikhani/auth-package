<?php
namespace D3CR33\Auth\Routes;

use Illuminate\Contracts\Routing\Registrar as Router;

class RouteRegister
{
    /**
     * @var Router
     */
    protected $router;

    /**
     * RouteRegister constructor.
     *
     * @param  Router  $router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function all()
    {
        $this->router->group(
            ['prefix'   =>  '', 'middleware'    =>  ['web', 'throttle:600:1']],
            function($router) {
                $router->get('login', 'AuthController@login');
            }
        );
    }
}