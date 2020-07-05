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
                    <h1 class=""> {{ __('Auth-Lang::trans.LogInToAccount') }} </h1>
                    <p class="signup-link">{{ __('Auth-Lang::trans.NewHere') }}? <a href="{{ route('register') }}">{{ __('Auth-Lang::trans.CreateAnAccount') }}</a></p>
                    <form class="text-left" method="POST" action="{{ route('post.login') }}">
                        @csrf
                        <div class="form">
                            <div id="username-field" class="field-wrapper input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="username" name="username" type="text" class="form-control" placeholder="{{ __('Auth-Lang::trans.Username') }}">
                            </div>

                            <div id="password-field" class="field-wrapper input mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Auth-Lang::trans.Password') }}">
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
                                    <button type="submit" class="btn btn-primary" value="">{{ __('Auth-Lang::trans.LogIn') }}</button>
                                </div>

                            </div>

                            <div class="field-wrapper text-center keep-logged-in">
                                <div class="n-chk new-checkbox checkbox-outline-primary">
                                    <label class="new-control new-checkbox checkbox-outline-primary">
                                        <input type="checkbox" class="new-control-input">
                                        <span class="new-control-indicator"></span>{{ __('Auth-Lang::trans.KeepMeLoggedIn') }}
                                    </label>
                                </div>
                            </div>

                            <div class="field-wrapper">
                                <a href="auth_pass_recovery.html" class="forgot-pass-link">{{ __('Auth-Lang::trans.ForgotPassword') }}?</a>
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