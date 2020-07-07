<?php

namespace D3CR33\Auth\Http\Controllers;

use D3CR33\Auth\Base\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class LoginController
 * @package D3CR33\Auth\Http\Controllers
 */
class LoginController extends BaseController
{
    /**
     * LoginController constructor.
     *
     * @param  Request  $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * return login blade
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLogin()
    {
        return view('Auth::login');
    }

    /**
     * login function for 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login()
    {
        return $this->checkAttempt() ?
            redirect()->intended('panel') :
            redirect()->route('login')->with('message', __('Auth-Lang::trans.message.IncorrectData'));
    }

    /**
     *logout user from session
     */
    public function logout()
    {
        return Auth::logout() ? :
            redirect()->route('login') ;
    }

    /**
     * return username & password
     * @return array
     */
    public function credentials()
    {
        return [
            $this->setUsername() => $this->request->username,
            'password'           => $this->request->password,
        ];
    }

    /**
     * check user is exists or no
     * @return bool
     */
    public function checkAttempt()
    {
        return Auth::attempt($this->credentials());
    }

    /**
     * set username
     * @return string
     */
    public function setUsername()
    {
        return 'email';
    }
}
