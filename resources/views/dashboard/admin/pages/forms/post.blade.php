@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="s3-m-10 s3-p-8 mt-5">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-title">
                                <h1 class="s3-fs-xs-3 text-center mt-5">CAUSE FORM</h1>
                                {{-- <h6>Department of Nutrition, Food and Exercise Sciences</h6> --}}
                            </div>
                            <div class="panel-body">
                                <form>
                                    Please complete all areas:
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="title" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="goal">Goal</label>
                                        <input type="number" class="form-control" id="number" placeholder="goal" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="rised">Rised</label>
                                        <input type="number" class="form-control" id="rised" placeholder=" amount rised" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="details">Details</label>
                                        <textarea id="details" class="form-control" name="details" rows="4" cols="50" style="width: 58em" required></textarea>
                                    </div>


                                    {{-- <hr /> --}}

                                    <p>Please upload the following for this application:</p>

                                    <div class="form-group">

                                        <label for="InputFile1">Letter of Intent</label>
                                        <input type="file" id="InputFile1" required>


                                    </div>

                                    <hr />
                                    
                                    <div class="text-center mb-5">
                                        <button type="button" class="btn btn-primary">Centered button</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
