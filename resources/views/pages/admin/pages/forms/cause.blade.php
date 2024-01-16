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
                                <form id="myForm" method="POST" action="{{ route('cause.store') }}">
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
                                        <input type="number" class="form-control" name="rised" placeholder=" amount rised" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="details">Details</label>
                                        <textarea id="details" class="form-control" name="details" rows="4" cols="50" style="width: 58em" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="details">Tags </label>
                                        <input type="number" class="form-control" name="tags" placeholder=" amount rised" required>
                                    </div>


                                    <p>Please upload the following for this application:</p>

                                    <div class="form-group">
                                        <label for="InputFile1">Image</label>
                                        <input type="file" name="image" required multiple>
                                    </div>
                                     
                                    <div id="tag-container">
                                        <label for="InputFile1">Tags</label>
                                        <input type="text" id="tags"  name= "tags" placeholder="add skills" />
                                        <div id="tag-list"></div>
                                    </div>

                                    <hr />
                                    <input type="hidden" id="formStatus" name="status" value="{{ 'submitted' }}"> <!-- Default value is "submitted" -->
                                     
                                    <div class="text-center mb-5">
                                        <button type="button" onclick="saveDraft()" class="btn btn-primary">Save Draft</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                
                             

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
    </div>
    <script>
        function saveDraft() {
            document.getElementById('formStatus').value = 'draft'; // Change the value of the hidden input field to "draft"
            document.getElementById('myForm').submit(); // Submit the form
        }

        document.addEventListener('DOMContentLoaded', function() {
    const tagInput = document.getElementById('tag-input');
    const tagList = document.getElementById('tag-list');

    tagInput.addEventListener('keydown', function(event) {
        if (event.key === 'Enter' || event.key === ',') {
            event.preventDefault();
            const tagValue = tagInput.value.trim();
            if (tagValue !== '') {
                addTag(tagValue);
                tagInput.value = '';
            }
        }
    });

    function addTag(tagValue) {
        const tag = document.createElement('div');
        tag.classList.add('tag');
        tag.textContent = tagValue;
        tag.addEventListener('click', function() {
            tag.remove();
        });
        tagList.appendChild(tag);
    }
});

    </script>
@endsection
