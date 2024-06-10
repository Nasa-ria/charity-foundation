@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Simple Tables</h1>
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
                        <div class="card mx-5">
                            <div class="card-header">
                                <h3 class="card-title">Bordered Table</h3>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>User</th>
                                            {{-- <th>Progress</th> --}}
                                            <th style="width: 150px">CRUD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            
                                       
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>   {{ $user->name }}</td>
                            {{-- if user is a volunter or worker this should be avaliable --}}
                                            <td><span class="badge bg-danger">delete</span>
                                           <span class="badge bg-warning"><a  href={{route('profile',$user->id)}}>profile</a></span>
                                           <span class="badge bg-primary">Read</span></td>
                                            {{-- <div> --}}
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

    </section>
</div>
                        </div>
        

                    </div>
        </section>
    </div>
@endsection
