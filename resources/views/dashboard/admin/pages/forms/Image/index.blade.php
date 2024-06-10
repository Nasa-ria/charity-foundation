@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="s3-m-10 s3-p-8 mt-5">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        {{-- <div class="panel panel-default"> --}}
                        <div class="panel-heading panel-title">
                            <h1 class="s3-fs-xs-3 text-center mt-5">Gallery List</h1>
                            {{-- <h6>Department of Nutrition, Food and Exercise Sciences</h6> --}}
                        </div>
                        <div class="panel-body">
                             
                            <a class="theme-btn" href="{{route('gallary.create')}}">add</a>

                            @foreach ( $images as $image ){
                                <ul>
                                    <li>
                                        <img src="{{ asset('storage/app/images/'.$image->image) }}"   style="height:100px; width: 200px";>
                                    </li>
                               
                            }
                                
                            @endforeach




                        </div>


                    </div>


        </section>
    </div>
@endsection
