@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">

                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="main-profile">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 align-self-center">
                                        <div class="main-info header-text text-center">
                                            <span>
                                                <h2>Login</h2>
                                            </span>
                                            <div class="col-md-12">
                                                <form
                                                    class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30"
                                                    role="form" action="/login" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <div class="control-wrapper">
                                                                <label for="text" class="control-label fa-label"><i
                                                                        class="fa fa-user fa-medium"></i></label>
                                                                <input type="text" name="username"
                                                                    class="form-control @error('username') is-invalid @enderror"
                                                                    id="username" placeholder="username/email"
                                                                    @if (Cookie::has('username')) value="{{ Cookie::get('username') }}" @endif
                                                                    required autofocus>


                                                                @error('username')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="control-wrapper">
                                                                <label for="password" class="control-label fa-label"><i
                                                                        class="fa fa-lock fa-medium"></i></label>
                                                                <input type="password" name="password" class="form-control"
                                                                    id="password" placeholder="Password"
                                                                    @if (Cookie::has('password')) value="{{ Cookie::get('password') }}" @endif
                                                                    required autofocus>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Remember Me -->
                                                    <div class="block mt-2">
                                                        <label for="remember_me" class="d-flex align-items-baseline">
                                                            <input id="remember_me" type="checkbox"
                                                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                                                name="remember"
                                                                @if (Cookie::has('username')) checked @endif>
                                                            <i
                                                                class="ms-2 text-sm text-white dark:text-gray-400">{{ __('Remember me') }}</i>
                                                        </label>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12" style="margin-top: 20px;">
                                                            <div class="control-wrapper">
                                                                <input type="submit" value="Login"
                                                                    class="btn btn-info btn-block">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="control-wrapper text-right">
                                                                @if (Route::has('password.request'))
                                                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                                        href="{{ route('password.request') }}">
                                                                        {{ __('Forgot your password?') }}
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </form>
                                                <div class="text-center">
                                                    <h5>Don't have an account?</h5>
                                                    <a href="/register" class="templatemo-create-new">Create new account <i
                                                            class="fa fa-arrow-circle-o-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->
                </div>
            </div>
        </div>
    </div>
@endsection
