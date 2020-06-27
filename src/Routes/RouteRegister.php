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
            ['prefix'   =>  'login', 'middleware'    =>  []],
            function($router) {
                $router->get('', 'LoginController@getLogin')->name('get.login');
                $router->post('', 'LoginController@login')->name('post.login');
            }
        );
    }
}