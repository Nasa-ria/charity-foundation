@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <div class="container">


            <div class="body" class="img js-fullheight">
                <section class="ftco-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center mb-5">
                                <h2 class="heading-section">Login #10</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="login-wrap p-0">
                                    <h3 class="mb-4 text-center">Have an account?</h3>
                                    <form  class="signin-form" method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control"  name="email"placeholder="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input id="password-field" type="password"  name="password"class="form-control"
                                                placeholder="Password" required>
                                            <span toggle="#password-field"
                                                class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputFile1">Profile</label>
                                            <input type="file" name="image" >
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign
                                                In</button>
                                        </div>
                                        <div class="form-group d-md-flex">
                                            <div class="w-50">
                                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                                    <input type="checkbox" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="w-50 text-md-right">
                                                <a href="#" style="color:black ">Forgot Password</a>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                                    <div class="social d-flex text-center">
                                        <a href="{{route('google.login')}}" class="px-2 py-2 mr-md-1 rounded"><span
                                                class="ion-logo-facebook mr-2"></span> Google</a>
                                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span
                                                class="ion-logo-twitter mr-2"></span> Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script src="{{ asset('js/login.js')}}"></script>
                <script src="{{ asset('js/popper.js')}}"></script>
                <script src="{{ asset('js/bootstrap.min.js')}}"></script>
                <script src="{{ asset('js/main.js')}}"></script>
                <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
                    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
                    data-cf-beacon='{"rayId":"846e6fe8ac4e033a","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
                    crossorigin="anonymous"></script>
            </div>

        </div>
    </div>
@endsection
