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
                                    <form class="signin-form" method="POST" action="{{ route('password.request.form') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="email"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign
                                                In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
