<?php

namespace D3CR33\Auth\Http\Controllers;

use D3CR33\Auth\Base\Controllers\BaseController;
use D3CR33\Auth\Base\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/**
 * Class RegisterController
 * @package D3CR33\Auth\Http\Controllers
 */
class RegisterController extends BaseController
{
    /**
     * RegisterController constructor.
     *
     * @param  Request  $request
     * @param  User  $user
     */
    public function __construct(Request $request, User $user)
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
        $this->validator();
        return $this->create($this->variable()) ?
            redirect()
                ->route('login')
                ->with('message', __('Auth-Lang::trans.message.RegisterSuccessfully')) :
            redirect()
                ->route('register')
                ->with('message', __('Auth-Lang::trans.message.RegisterError'));
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

    /**
     * @param $request
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator()
    {
        $rule = [
            'fname' =>  'required',
            'lname' =>  'required',
            'email' =>  'required',
            'password'  =>  'required|confirmed',
        ];
        $this->request->validate($rule, $this->message(),$this->attributes());
    }

    /**
     * set custom message for validation
     * @return array
     */
    public function message()
    {
        return [
            'required'  =>  __('Auth-Lang::validation.required'),
            'confirmed'  => __('Auth-Lang::validation.confirmed'),
        ];
    }

    /**
     * set custom
     * @return array
     */
    public function attributes()
    {
        return [
            'fname' =>  __('Auth-Lang::validation.attributes.fname'),
            'lname' =>  __('Auth-Lang::validation.attributes.lname'),
            'email' =>  __('Auth-Lang::validation.attributes.email'),
            'password'  =>  __('Auth-Lang::validation.attributes.password'),
        ];
    }
}
