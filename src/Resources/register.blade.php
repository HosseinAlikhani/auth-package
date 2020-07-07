@extends('Auth::layout.app')

@section('css')
    <link href="{{ asset('/src/auth/assets/css/authentication/form-1.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">
                    @if(Session::has('message'))
                        <div class="alert alert-danger">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                {{ $errors->first() }}
                            </ul>
                        </div>
                    @endif
                    <h1 class=""> {{ __('Auth-Lang::trans.GetStartWithAFreeAccount') }} </h1>
                    <p class="signup-link"> {{ __('Auth-Lang::trans.AlreadyHaveAnAccount') }} <a href="{{ route('login') }}"> {{ __('Auth-Lang::trans.LogIn') }} </a></p>
                    <form class="text-left" method="POST" action="{{ route('post.register') }}">
                       @csrf
                        <div class="form">

                            <div id="fname-field" class="field-wrapper input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="fname" name="fname" type="text" class="form-control" placeholder=" {{ __('Auth-Lang::trans.FirstName') }} ">
                            </div>
                            <div id="lname-field" class="field-wrapper input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="lname" name="lname" type="text" class="form-control" placeholder=" {{ __('Auth-Lang::trans.LastName') }} ">
                            </div>
                            <div id="email-field" class="field-wrapper input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                <input id="email" name="email" type="text" value="" placeholder=" {{ __('Auth-Lang::trans.Email') }} ">
                            </div>
                            <div id="password-field" class="field-wrapper input mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input id="password" name="password" type="password" value="" placeholder="{{ __('Auth-Lang::trans.Password') }}">
                            </div>
                            <div id="password-field" class="field-wrapper input mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input id="password_confirmation" name="password_confirmation" type="password" value="" placeholder="{{ __('Auth-Lang::trans.PasswordConfirmation') }}">
                            </div>
                            <div class="field-wrapper terms_condition">
                                <div class="n-chk new-checkbox checkbox-outline-primary">
                                    <label class="new-control new-checkbox checkbox-outline-primary">
                                        <input type="checkbox" class="new-control-input">
                                        <span class="new-control-indicator"></span><span> {{ __('Auth-Lang::trans.IAgreeToThe') }} <a href="javascript:void(0);">  {{ __('Auth-Lang::trans.TermsAndConditions') }} </a></span>
                                    </label>
                                </div>
                            </div>
                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper toggle-pass">
                                    <p class="d-inline-block">{{ __('Auth-Lang::trans.ShowPassword') }}</p>
                                    <label class="switch s-primary">
                                        <input type="checkbox" id="toggle-password" class="d-none">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary" value=""> {{ __('Auth-Lang::trans.GetStarted') }} !</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="form-image">
        <div class="l-image">
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('/src/auth/assets/js/authentication/form-1.js') }}"></script>
@endsection
