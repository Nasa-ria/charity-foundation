@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="s3-m-10 s3-p-8 mt-5">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        {{-- <div class="panel panel-default"> --}}
                        <div class="panel-heading panel-title">
                            <h1 class="s3-fs-xs-3 text-center mt-5">Gallery  Form</h1>
                            {{-- <h6>Department of Nutrition, Food and Exercise Sciences</h6> --}}
                        </div>
                        <div class="panel-body">
                            <form id="myForm" method="POST" action="{{ route('gallary.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- <p class="mb-3" style="color:#FF0000"> *Please complete all areas:</p> --}}
                               




                                <div class="form-group  mt-6">
                                    <label for="InputFile1">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>

                                


                                <hr />
                                <input type="hidden" id="formStatus" name="status" value="{{ 'Published' }}">

                                <div class="text-center mt-5">
                                    <button type="button" onclick="saveDraft()" class="btn btn-primary">Save
                                        Draft</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>



                        




                            </form>



                        </div>

                   
                    </div>


        </section>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        function saveDraft() {
            document.getElementById('formStatus').value = 'draft'; // Change the value of the hidden input field to "draft"
            document.getElementById('myForm').submit(); // Submit the form
        }
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("#multiple").select2({
            placeholder: "Select a tag",
            allowClear: true,
            tags: true
        });
    </script> --}}
@endsection
