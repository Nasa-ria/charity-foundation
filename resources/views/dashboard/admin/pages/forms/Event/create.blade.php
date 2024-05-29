@extends('layouts.admin.index')
@section('content')
    <h1 class="s3-fs-xs-3 text-center mt-5">CAUSE FORM</h1>
    <div class="content-wrapper">

        <section class="content">

            <div class="container">

                <div class="s3-m-10 s3-p-8 mt-5">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        {{-- <div class="panel panel-default"> --}}
                        <div class="panel-heading panel-title">
                            {{-- <h6>Department of Nutrition, Food and Exercise Sciences</h6> --}}
                        </div>
                        <div class="panel-body">
                            <form id="myForm" method="POST" action="{{ route('admin.event.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                Please complete all areas:
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="title" required>
                                </div>

                         

                                <div class="form-group">
                                    <label for="event_details">details</label>
                                    <textarea id="event_details" class="form-control" name="details" rows="4" cols="50" style="width: 56em" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="event_mission">event mission</label>
                                    <textarea id="event_mission" class="form-control" name="details" rows="4" cols="50" style="width: 56em" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="mission_bullet"> mission point </label><br>
                                    <input type="text"  class="form-control" id="mission_bullet" name="mission_bullet[]"
                                        placeholder="Point 1"><br>
                                    <input type="text" class="form-control" id="mission_bullet" name="mission_bullet[]"
                                        placeholder="Point 1"><br>
                                    <input type="text" class="form-control" id="mission_bullet" name="mission_bullet[]"
                                        placeholder="Point 1"><br>
                                    <input type="text"  class="form-control"  id="mission_bullet" name="mission_bullet[]"
                                        placeholder="Point 1"><br>
                                    <input type="text"  class="form-control"  id="mission_bullet" name="mission_bullet[]"
                                        placeholder="Point 1"><br>
                                    <input type="text"  class="form-control" id="mission_bullet" name="mission_bullet[]"
                                        placeholder="Point 1">

                                    </div>
                                    <div class="form-group">
                                        <label for="details">Map </label>
                                        <div id="map" name="location" style="height: 400px;"></div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="tags">Tags</label>
                                   
                                    <select id="multiple" class="js-states form-control" multiple  name="tags[]">
                                        <option>Help</option>
                                        <option>Donations</option>
                                        <option>Helping Hand</option>
                                        <option>Poor People</option>
                                        <option>Video</option>
                                        <option>Charity</option>
                                    </select>
                                    </div>
                                 




                                <hr />
                                <input type="hidden" id="formStatus" name="status" value="{{ 'publish' }}">

                                <div class="text-center mt-5">
                                    <button type="button" onclick="saveDraft()" class="btn btn-primary">Save Draft</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>



                        </div>

                        {{-- </div> --}}
                    </div>
                </div>
        </section>
    </div>



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
