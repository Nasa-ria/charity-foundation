@extends('layouts.admin.index')
@section('content')

        <div class="content-wrapper">
            <section class="content"> 
            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title"> POST</h3>
                </div>

                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Forms</th>
                                {{-- <th>Progress</th> --}}
                                <th >Add</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Cause</td>
                           
                                    <td><a class="theme-btn" href="{{route('cause')}}">add</a></td>
                            
                               
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Event</td>
                                
                                <td><a class="theme-btn" href="{{route('event.form')}}">add</a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Add Picture to Gallery</td>
                              
                                <td><a class="theme-btn" href="{{route('cause')}}">add</a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Fix and squish bugs</td>
                             
                                <td><a class="theme-btn" href="{{route('cause')}}">add</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            </div>


@endsection