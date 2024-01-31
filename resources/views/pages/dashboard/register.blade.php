@extends('layouts.user.index')
@section('content')

<div class="tp-login-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                        <form class="tp-accountWrapper" method="POST" action="{{ route('register') }}">
                            @csrf
                    <div class="tp-accountInfo">
                        <div class="tp-accountInfoHeader">
                            {{-- <a href="#"><img src="assets/images/logo.png" alt=""></a> --}}
                            <a class="tp-accountBtn" href="login.html">
                                <span class="">Log in</span>
                            </a>
                        </div>
                        <div class="image">
                            <img src="{{asset('images/login.svg')}}" alt="">
                        </div>
                        <div class="back-home">
                            <a class="tp-accountBtn"  href="{{route('home')}}">
                                <span class="">Back To Home</span>
                            </a>
                        </div>
                    </div>
                    <div class="tp-accountForm form-style">
                        <div class="fromTitle">
                            <h2>Signup</h2>
                            <p>Sign into your pages account</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" placeholder="Your name here..">
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <label>Email</label>
                                <input type="text" id="email" name="email" placeholder="Your email here..">
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="pwd2" type="password" name="password" placeholder="Your password here.." value="sfsg" name="pass">
                                </div>
                                <span class="input-group-btn">
                                    <button class="btn btn-default reveal3" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="pwd3" type="password" name="password_confirmation" placeholder="Your password here.." value="ssres" name="pass">
                                </div>
                                <span class="input-group-btn">
                                    <button class="btn btn-default reveal2" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                                </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <button type="submit" class="tp-accountBtn">Signup</button>
                            </div>
                        </div>
                        <h4 class="or"><span>OR</span></h4>
                        <ul class="tp-socialLoginBtn">
                            <li><button class="facebook" tabindex="0" type="button"><span><i class="fa fa-facebook"></i></span></button></li>
                            <li><button class="twitter" tabindex="0" type="button"><span><i class="fa fa-twitter"></i></span></button></li>
                            <li><button class="linkedin" tabindex="0" type="button"><span><i class="fa fa-linkedin"></i></span></button></li>
                        </ul>
                        <p class="subText"> Have an account?  <a href="{{route('login')}}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection