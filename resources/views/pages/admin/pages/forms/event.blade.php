@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="s3-m-10 s3-p-8 mt-5">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        {{-- <div class="panel panel-default"> --}}
<<<<<<< HEAD
                            <div class="panel-heading panel-title">
                                <h1 class="s3-fs-xs-3 text-center mt-5">EVENT FORM</h1>
                                {{-- <h6>Department of Nutrition, Food and Exercise Sciences</h6> --}}
                            </div>
                            <div class="panel-body">
                                <form id="myForm" method="POST" action="{{ route('cause.store') }}" enctype="multipart/form-data" >
                                    @csrf
                                    Please complete all areas:
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="title" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="details">details</label>
                                        <textarea id="details" class="form-control" name="details" rows="4" cols="50" style="width: 58em" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="event_mission">event mission </label><br>
                                    <input type="text"   class="form-control" id="mission_rewards" name="event_mission[]" placeholder="Reward 1" style="margin-bottom:0.6em"><br>
                                    <input type="text"  class="form-control" id="mission_rewards" name="event_mission[]" placeholder="event mission" style="margin-bottom: 0.6em"><br>
                                    <input type="text" class="form-control" id="mission_rewards" name="event_mission[]" placeholder="event mission" style="margin-bottom: 0.6em"><br>
                                    <input type="text"  class="form-control" id="mission_rewards" name="event_mission[]" placeholder="event mission" style="margin-bottom:0.6em"><br>
                                    <input type="text" class="form-control" id="mission_rewards" name="event_mission[]" placeholder="event mission" style="margin-bottom: 0.6em"><br>
                                    <input type="text" class="form-control" id="mission_rewards" name="event_mission[]" placeholder="event mission"><br>
                                    
=======
                        <div class="panel-heading panel-title">
                            <h1 class="s3-fs-xs-3 text-center mt-5">CAUSE FORM</h1>
                            {{-- <h6>Department of Nutrition, Food and Exercise Sciences</h6> --}}
                        </div>
                        <div class="panel-body">
                            <form id="myForm" method="POST" action="{{ route('cause.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                Please complete all areas:
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="title" required>
                                </div>

                                {{-- <div class="form-group">
                                        <label for="goal">Goal</label>
                                        <input type="number" class="form-control" name="goal" placeholder="goal" required>
                                    </div> --}}

                                {{-- <div class="form-group">
                                        <label for="rised">Rised</label>
                                        <input type="number" class="form-control" name="rised" placeholder=" amount rised" required>
                                    </div> --}}

                                <div class="form-group">
                                    <label for="details">details</label>
                                    <textarea id="details" class="form-control" name="details" rows="4" cols="50" style="width: 58em" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="event_mission">event mission </label>
                                    <input type="text" id="mission_rewards" name="event_mission[]"
                                        placeholder="Reward 1">
                                    <input type="text" id="mission_rewards" name="event_mission[]"
                                        placeholder="event mission">
                                    <input type="text" id="mission_rewards" name="event_mission[]"
                                        placeholder="event mission">
                                    <input type="text" id="mission_rewards" name="event_mission[]"
                                        placeholder="event mission">
                                    <input type="text" id="mission_rewards" name="event_mission[]"
                                        placeholder="event mission">
                                    <input type="text" id="mission_rewards" name="event_mission[]"
                                        placeholder="event mission">
>>>>>>> 16df19fb98eef49e78a669f0813c631b4792f738

                                    </div>
                                    <div class="form-group">
                                        <label for="details">Map </label>
                                        <div id="map" name="location" style="height: 400px;"></div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label>Minimal</label> 
                                                <select class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option selected="selected">Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select> 
                                            </div> <!-- /.form-group -->
                                            <div class="form-group"> 
                                                <label>Disabled</label>
                                                 <select class="form-control select2 select2-hidden-accessible" disabled=""
                                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option selected="selected">Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select> 
                                            </div> <!-- /.form-group -->
                                        </div> <!-- /.col -->
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                 <label>Multiple</label> 
                                                 <select class="form-control select2 select2-hidden-accessible" multiple=""
                                                    data-placeholder="Select a State" style="width: 100%;" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select> </div> <!-- /.form-group --> --}}
                                            {{-- <div class="form-group"> 
                                                <label>Disabled Result</label> 
                                                <select class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option selected="selected">Alabama</option>
                                                    <option>Alaska</option>
                                                    <option disabled="disabled">California (disabled)</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select> </div> <!-- /.form-group -->
                                        </div> <!-- /.col -->
                                    </div> --}}

                                


                                <hr />
                                <input type="hidden" id="formStatus" name="status" value="{{ 'submitted' }}">

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

<<<<<<< HEAD
    //     document.addEventListener('DOMContentLoaded', function() {
    // const tagInput = document.getElementById('tag-input');
    // const tagList = document.getElementById('tag-list');

    // tagInput.addEventListener('keydown', function(event) {
    //     if (event.key === 'Enter' || event.key === ',') {
    //         event.preventDefault();
    //         const tagValue = tagInput.value.trim();
    //         if (tagValue !== '') {
    //             addTag(tagValue);
    //             tagInput.value = '';
    //         }
    //     }
    // });

//     function addTag(tagValue) {
//         const tag = document.createElement('div');
//         tag.classList.add('tag');
//         tag.textContent = tagValue;
//         tag.addEventListener('click', function() {
//             tag.remove();
//         });
//         tagList.appendChild(tag);
//     }
// });

// document.addEventListener('DOMContentLoaded', function() {
//     new Tagify(document.querySelector('input[name=tags]'), {
//         enforceWhitelist: true,
//         whitelist: ['HTML', 'CSS', 'JavaScript'], // Example whitelist of skills/tags
//         dropdown: {
//             enabled: 1,
//             maxItems: 5
//         }
//     });
// });

    function initMap() {
      // Initialize the map
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
      });
  
      // Add a marker
      var marker = new google.maps.Marker({
        position: {lat: -34.397, lng: 150.644},
        map: map,
        title: 'Marker Title'
      });
    }

    $(document).ready(function() {
    $('.select2').select2({
    closeOnSelect: false
});
});
  </script>
  
=======
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

            // function addTag(tagValue) {
            //     const tag = document.createElement('div');
            //     tag.classList.add('tag');
            //     tag.textContent = tagValue;
            //     tag.addEventListener('click', function() {
            //         tag.remove();
            //     });
            //     tagList.appendChild(tag);
            // }
        });

        // document.addEventListener('DOMContentLoaded', function() {
        //     new Tagify(document.querySelector('input[name=tags]'), {
        //         enforceWhitelist: true,
        //         whitelist: ['HTML', 'CSS', 'JavaScript'], // Example whitelist of skills/tags
        //         dropdown: {
        //             enabled: 1,
        //             maxItems: 5
        //         }
        //     });
        // });

        // function initMap() {
        //   // Initialize the map
        //   var map = new google.maps.Map(document.getElementById('map'), {
        //     center: {lat: -34.397, lng: 150.644},
        //     zoom: 8
        //   });
>>>>>>> 16df19fb98eef49e78a669f0813c631b4792f738

        //   // Add a marker
        //   var marker = new google.maps.Marker({
        //     position: {lat: -34.397, lng: 150.644},
        //     map: map,
        //     title: 'Marker Title'
        //   });
        // }

        $(document).ready(function() {
            $('.select2').select2({
                closeOnSelect: false
            });



        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endsection
