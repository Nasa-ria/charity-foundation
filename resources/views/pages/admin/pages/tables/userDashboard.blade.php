@extends('layouts.index')
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
                            <li class="breadcrumb-item active">Simple Tables</li>
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
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            {{-- <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                </div>
                                            </td> --}}
                                            {{-- <div class="d-flex flex-row"> --}}
                                            <td><span class="badge bg-danger">delete</span>
                                           <span class="badge bg-warning">Edit</span>
                                           <span class="badge bg-primary">Read</span></td>
                                            {{-- <div> --}}
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            {{-- <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                                                </div>
                                            </td> --}}
                                            <td><span class="badge bg-danger">delete</span>
                                                <span class="badge bg-warning">Edit</span>
                                                <span class="badge bg-primary">Read</span></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            {{-- <td>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                                                </div>
                                            </td> --}}
                                            <td><span class="badge bg-danger">delete</span>
                                                <span class="badge bg-warning">Edit</span>
                                                <span class="badge bg-primary">Read</span></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            {{-- <td>
                                                <div class="progress progress-xs progress-striped active">
                                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                                </div>
                                            </td> --}}
                                            <td><span class="badge bg-danger">delete</span>
                                                <span class="badge bg-warning">Edit</span>
                                                <span class="badge bg-primary">Read</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        

                    </div>
        </section>
    </div>
@endsection
