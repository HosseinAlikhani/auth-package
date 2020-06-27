<?php

namespace D3CR33\Auth\Http\Controllers;

use D3CR33\Auth\Base\Controllers\BaseController;
use D3CR33\Auth\Base\Model\User;
use D3CR33\Auth\Http\Request\RegisterRequest;
use Illuminate\Support\Facades\Hash;

/**
 * Class RegisterController
 * @package D3CR33\Auth\Http\Controllers
 */
class RegisterController extends BaseController
{
    /**
     * RegisterController constructor.
     *
     * @param  RegisterRequest  $request
     * @param  User  $user
     */
    public function __construct(RegisterRequest $request, User $user)
    {
        $this->request = $request;
        $this->model   = $user;
    }

    /**
     * return blade of register page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getRegister()
    {
        return view('Auth::register');
    }

    /**
     * create new user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register()
    {
        return $this->create($this->variable()) ?
            redirect()->route('dashboard') :
            redirect()->route('get.register')->with('message',
                'We have made a mistake in your registration - please reapply');
    }

    /**
     * set variable for register user
     * @return array
     */
    public function variable()
    {
        return [
            'fname'    => $this->request->fname,
            'lname'    => $this->request->lname,
            'email'    => $this->request->email,
            'password' => Hash::make($this->request->password),
        ];
    }
}
