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
                $router->get('', 'LoginController@getLogin')->name('login');
                $router->post('', 'LoginController@login')->name('post.login');
            }
        );
        $this->router->group(
            ['prefix'   =>  'register', 'middleware'    =>  []],
            function($router) {
                $router->get('', 'RegisterController@getRegister')->name('register');
                $router->post('', 'RegisterController@register')->name('post.register');
            }
        );
        $this->router->group(
            ['prefix'   =>  'reset-password', 'middleware'    =>  []],
            function($router) {
                $router->get('', 'ResetPasswordController@getResetPassword')->name('resetpassword');
                $router->patch('', 'ResetPasswordController@resetPassword')->name('post.resetpassword');
            }
        );
    }
}