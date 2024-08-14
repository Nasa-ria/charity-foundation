@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Users</h3>
                                    <a href="{{route('admin.user.create')}}" class="btn btn-primary">Add User</a>
                                    {{-- <a class="theme-btn" href="{{route('cause.index')}}">view</a> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            {{-- <th>Email</th> --}}
                                            <th>Role</th>
                                            <th style="width: 150px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$user->name}}</td>
                                                {{-- <td>{{$user->email}}</td> --}}
                                                <td>{{$user->role}}</td>
                                                <td>
                                                    {{-- <span class="badge bg-danger"><a href={{route('users.destroy',$user->id)}}>delete</a></span> --}}
                                                    {{-- <span class="badge bg-warning"><a  href={{route('users.edit',$user->id)}}>edit</a></span> --}}
                                                    <span class="badge bg-primary"><a  href={{route('profile',$user->id)}}>profile</a></span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-5"> 
                            <a href="{{ $users->previousPageUrl() }}" aria-label="Previous" class="btn btn-primary btn-sm mr-2{{ $users->onFirstPage() ? ' disabled' : '' }}">
                                Previous
                            </a>

                            <span>Page {{ $users->currentPage() }} of {{ $users->lastPage() }}</span>

                            <a href="{{ $users->nextPageUrl() }}" aria-label="Next" class="btn btn-primary ml-2{{ $users->hasMorePages() ? '' : ' disabled' }}">
                                Next
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

