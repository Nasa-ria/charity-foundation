@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content -ml-6 ">

            <form id="myForm" method="POST" action="{{ route('cause.store') }}" enctype="multipart/form-data">
                @csrf
                <p class="mb-3" style="color:#FF0000"> *Please complete all areas:</p>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="title" required>
                </div>

             

            

                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea id="describtion" class="form-control" name="details" rows="4" cols="50" style="width: 58em" required></textarea>
                </div>



                <div class="form-group">
                    <div class="form-group">

                        <label for="assignee">Assignee(s)</label>
                        <select id="multiple" class="js-states form-control" multiple>
                            <option>Java</option>
                            <option>Javascript</option>
                            <option>PHP</option>
                            <option>Visual Basic</option>
                        </select>




                    </div>



            </form>




        </section>
    </div>
@endsection
