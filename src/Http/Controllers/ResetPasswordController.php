<?php

namespace D3CR33\Auth\Http\Controllers;

use D3CR33\Auth\Base\Controllers\BaseController;
use D3CR33\Auth\Base\Model\User;
use Illuminate\Http\Request;


class ResetPasswordController extends BaseController
{
    public function __construct(Request $request, User $user)
    {
        $this->request = $request;
        $this->model = $user;
    }

    public function getResetPassword()
    {
        return view('Auth::pass_recovery');
    }
    public function resetPassword()
    {
        
    }
}
