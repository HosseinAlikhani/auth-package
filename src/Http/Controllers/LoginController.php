<?php

namespace D3CR33\Auth\Http\Controllers;

use D3CR33\Auth\Base\Controllers\BaseController;
use D3CR33\Auth\Http\Request\LoginRequest;

class LoginController extends BaseController
{
    public function __construct(LoginRequest $request)
    {
        $this->request = $request;
    }

    public function getLogin()
    {
        return view('Auth::login');
    }

    public function login()
    {
        dd($this->request->all());
    }
}
