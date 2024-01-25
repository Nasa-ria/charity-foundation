@extends('layouts.user.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="tp-login-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form  class="signin-form" method="POST" action="{{ route('signup') }}" >
                                <div class="tp-accountInfo">
                                    <div class="tp-accountInfoHeader">
                                        {{-- <a href="#"><img src="{{asset('images/logo.png')}}" alt=""></a> --}}
                                        <a class="tp-accountBtn" href="register.html">
                                            <span class="">Create Account</span>
                                        </a>
                                    </div>
                                    <div class="image">
                                        <img src="{{ asset('images/login.svg') }}" alt="">
                                    </div>
                                    <div class="back-home">
                                        <a class="tp-accountBtn" href="{{ route('home') }}">
                                            <span class="">Back To Home</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-accountForm form-style">
                                    <div class="fromTitle">
                                        <h2>Login</h2>
                                        <p>Sign into your pages account</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <label>Email</label>
                                            <input type="text" id="email" name="email"
                                                placeholder="demo@gmail.com">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="pwd6" type="password" placeholder="" value="123456"
                                                    name="pass">
                                            </div>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default reveal6" type="button"><i
                                                        class="glyphicon glyphicon-eye-open"></i></button>
                                            </span>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="check-box-wrap">
                                                <div class="input-box">
                                                    <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                                    <label for="fruit4">Remember Me</label>
                                                </div>
                                                <div class="forget-btn">
                                                    <a href="forgot.html">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <button type="submit" class="tp-accountBtn">Login</button>
                                        </div>
                                    </div>
                                    <h4 class="or"><span>OR</span></h4>
                                    <ul class="tp-socialLoginBtn">
                                        <a href="{{ url('/login/facebook') }}" class="btn btn-primary">Login with
                                            Facebook</a>
                                        <a href="{{ url('/login/google') }}" class="btn btn-danger">Login with Google</a>
                                        <!-- Add more social media login buttons as needed -->

                                    </ul>
                                    <p class="subText">Don't have an account? <a href="register.html">Create free
                                            account</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- theme-change-btn -->
    {{-- <div class="theme-change-btn">
    <button id="change-theme-btn">Light</button>
</div> --}}
@endsection
