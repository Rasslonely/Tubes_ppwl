@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-profile">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 align-self-center">
                                        <div class="main-info header-text text-center">
                                            <span>
                                                <h2>SIGN UP</h2>
                                            </span>
                                            <div class="col-md-12">
                                                <form
                                                    class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30"
                                                    role="form" action="/register" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <div class="control-wrapper">
                                                                <label for="Name" class="control-label fa-label"><i
                                                                        class="fa fa-user fa-medium"></i></label>
                                                                <input type="text" name="name"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    id="name" placeholder="Name" required
                                                                    value="{{ old('name') }}">
                                                                @error('name')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <div class="control-wrapper">
                                                                <label for="username" class="control-label fa-label"><i
                                                                        class="fa fa-user fa-medium"></i></label>
                                                                <input type="text" name="username"
                                                                    class="form-control @error('username') is-invalid @enderror"
                                                                    id="username" placeholder="Username" required
                                                                    value="{{ old('username') }}">
                                                                @error('username')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <div class="control-wrapper">
                                                                <label for="email" class="control-label fa-label"><i
                                                                        class="fa fa-user fa-medium"></i></label>
                                                                <input type="email" name="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    id="email" placeholder="Email address" required
                                                                    value="{{ old('email') }}">
                                                                @error('email')
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
                                                                <input type="password" name="password"
                                                                    class="form-control @error('password') is-invalid @enderror"
                                                                    id="password" placeholder="Password" required>
                                                                @error('password')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12" style="margin-top: 20px;">
                                                            <div class="control-wrapper">
                                                                <input type="submit" value="Sign Up"
                                                                    class="btn btn-info btn-block">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </form>
                                                <div class="text-center">
                                                    <h5>Have an account?</h5>
                                                    <a href="/login" class="templatemo-create-new">Login Here<i
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
