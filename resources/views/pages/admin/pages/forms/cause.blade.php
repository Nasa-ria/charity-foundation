@extends('layouts.admin.index')
@section('content')
    <h1 class="s3-fs-xs-3 text-center mt-5">CAUSE FORM</h1>

    <section class="content">

        <div class="container mr-5">
            <div class="s3-m-10 s3-p-8 mt-5">
                <div class="col-xs-12 col-md-offset-1 col-md-10">
                    <div class="panel panel-default">

                        <div class="panel-body ">
                            <form id="myForm" method="POST" action="{{ route('cause.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <p class="mb-3" style="color:#FF0000"> *Please complete all areas:</p>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="title" required>
                                </div>

                                <div class="form-group">
                                    <label for="goal">Goal</label>
                                    <input type="number" class="form-control" name="goal" placeholder="goal" required>
                                </div>

                                <div class="form-group">
                                    <label for="rised">Rised</label>
                                    <input type="number" class="form-control" name="rised" placeholder=" amount rised"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="details">Details</label>
                                    <textarea id="details" class="form-control" name="details" rows="4" cols="50" style="width: 58em" required></textarea>
                                </div>



                                <small  style="color:#FF0000">Insert Image:</small>

                                <div class="form-group">
                                    <label for="InputFile1">Image</label>
                                    <input type="file" name="image" required>
                                </div>
                                <div class="form-group">
                                    

                                   <label for="tags">Tags</label>
                                        <select id="multiple" class="js-states form-control" multiple  name="tags[]">
                                            <option>Help</option>
                                            <option>Donations</option>
                                            <option>Help</option>
                                            <option>Helping Hand</option>
                                            <option>Poor People</option>
                                            <option>Video</option>
                                            <option>Charity</option>
                                        </select>




                                    </div>



                            </form>




                        </div>


                    </div>


    </section>
    </div>
    <div class=" mb-5">
        <input type="hidden" id="formStatus" name="status" value="{{ 'submitted' }}">

        <div class="text-center mt-5">
            <button type="button" onclick="saveDraft()" class="btn btn-primary">Save
                Draft</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />

    <!-- Include jQuery (if not already included) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
        function saveDraft() {
            document.getElementById('formStatus').value = 'draft'; // Change the value of the hidden input field to "draft"
            document.getElementById('myForm').submit(); // Submit the form
        }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("#multiple").select2({
            placeholder: "Select a tag",
            allowClear: true,
            tags: true
        });
    </script>
@endsection
