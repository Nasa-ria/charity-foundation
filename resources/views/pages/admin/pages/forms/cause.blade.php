@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="s3-m-10 s3-p-8 mt-3 mb-3 ">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        <div class="panel-heading panel-title">
                            <h1 class="s3-fs-xs-3 text-center">CAUSE FORM</h1>
                   
                        </div>
                        <div class="panel-body">
                            <div class="mb-2">
                            <form id="myForm" method="POST" action="{{ route('cause.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                Please complete all areas:
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
                                    <label for="tags">Tags</label>
                                    <select id="tags" class=" select2" name="tags[]"  multiple placeholder="Choose tags" data-allow-clear="1">
                                        <option value="Donation">Donation</option>
                                        <option value="Charity">Charity</option>
                                        <option value="Event">Event</option>                                        
                                    </select>
                                    {{-- <button id="addTagButton" type="button">Add Tag</button>
                                    <ul id="tagsList"></ul>
                                    <button type="submit">Submit</button>
                                </div> --}}
                                <div class="form-group">
                                    <label for="details">Details</label>
                                    <textarea id="details" class="form-control" name="details" rows="4" cols="50" style="width: 58em" required></textarea>
                                </div>

                                

                                <div class="form-group  mt-2">
                                    <label for="InputFile1">Image</label>
                                    <input type="file" name="image" required>
                                </div>

                              

                                <hr />
                                <input type="hidden" id="formStatus" name="status" value="{{ 'submitted' }}">

                                <div class="text-center ">
                                    <button type="button" onclick="saveDraft()" class="btn btn-primary">Save
                                        Draft</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>








                            </form>
                            </div>


                        </div>

                     
                        
                    </div>
                </div>
        </section>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
jQuery(document).ready(function($) {
    $('.select2').each(function() {
        $(this).select2({
            theme: 'bootstrap4',
            placeholder: $(this).attr('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    });

    $('#myForm').submit(function(event) {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Get the selected tags from the select element
        var selectedTags = $('#tags').val();

        // Add the selected tags to the form data
        var formData = new FormData(this);
        if (selectedTags) {
            selectedTags.forEach(function(tag) {
                formData.append('tags[]', tag);
            });
        }

        // Log the form data (for demonstration purposes)
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }

        // Submit the form
        this.submit(); // Uncomment this line to submit the form
    });

    function saveDraft() {
        document.getElementById('formStatus').value = 'draft'; // Change the value of the hidden input field to "draft"
        document.getElementById('myForm').submit(); // Submit the form
    }
});
</script>
 
@endsection
