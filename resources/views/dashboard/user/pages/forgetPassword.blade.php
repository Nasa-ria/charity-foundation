@extends('layouts.user.index')
@section('content')

    <div class="tp-login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-login-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="tp-accountWrapper" action="#">
                                        <div class="tp-accountInfo">
                                            <div class="tp-accountInfoHeader">
                                                <a href="#"><img src="assets/images/logo.png" alt=""></a>
                                                <a class="tp-accountBtn" href="register.html">
                                                    Create Account
                                                </a>
                                            </div>
                                            <div class="image">
                                                <img src="{{ asset('images/login.svg') }}" alt="">
                                            </div>
                                            <div class="back-home">
                                                <a class="tp-accountBtn" href="{{ route('home') }}">
                                                    Back To Home
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tp-accountForm form-style">
                                            <div class="fromTitle">
                                                <h2>Reset Password</h2>
                                                <p>Sign into your pages account</p>
                                            </div>
                                            <div class="row">

                                                <form class="signin-form" method="POST"
                                                    action="{{ route('post.forgetpassword') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="tp-accountBtn">Submit </button>
                                                    {{-- </div> --}}


                                                    {{-- <div class="col-lg-12 col-md-12 col-12"> --}}
                                                        <button type="submit" class="tp-accountBtn">Resend
                                                            Password</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <h4 class="or"><span>OR</span></h4>
                                            {{-- <ul class="tp-socialLoginBtn">
                                            <li><button class="facebook" tabindex="0" type="button"><span><i class="fa fa-facebook"></i></span></button></li>
                                            <li><button class="twitter" tabindex="0" type="button"><span><i class="fa fa-twitter"></i></span></button></li>
                                            <li><button class="linkedin" tabindex="0" type="button"><span><i class="fa fa-linkedin"></i></span></button></li>
                                        </ul> --}}
                                            <p class="subText">Don't have an account? <a href="register.html">Create free
                                                    account</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
