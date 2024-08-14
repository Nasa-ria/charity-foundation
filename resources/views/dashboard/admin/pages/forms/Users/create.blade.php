@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="s3-m-10 s3-p-8 mt-5">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        {{-- <div class="panel panel-default"> --}}
                        <div class="panel-heading panel-title">
                            <h1 class="s3-fs-xs-3 text-center mt-5">CREATE USER</h1>
           
                            {{-- <h6>Department of Nutrition, Food and Exercise Sciences</h6> --}}
                        </div>
                        <div class="panel-body">
                            <form id="myForm" method="POST" action="{{ route('admin.user.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <p class="mb-3" style="color:#FF0000"> *Please complete all areas:</p>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="name" required>
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="title" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="email" required>


                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select id="multiple" class="js-states form-control" name="role" required>
                                            <option>Admin</option>
                                            <option>Volunteer</option>
                                            <option>Employee</option>
                                            <option>User</option>











                                            {{-- <hr /> --}}

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>







                            </form>



                        </div>
                    </div>


        </section>
    </div>




   
@endsection
