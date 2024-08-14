@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">

            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card mt-5">
                            <div class="card-header">User Profile</div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('path_to_user_image') }}" class="img-fluid rounded-circle mb-3"
                                            alt="User Image">
                                    </div>
                                    <div class="col-md-8">
                                      
                                            
                                
                                        <h3>{{ $user->name }}</h3>
                                        <p> {{ $user->email }}</p>
                                        <p> {{ $user->position }}</p>
                                        
                                        <!-- Add more user details here -->
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 @endsection
