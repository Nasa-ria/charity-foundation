@extends('layouts.admin.index')
@section('content')

<section class="content">
    <div class="container mr-5">
        <div class="s3-m-10 s3-p-8 mt-5">
            <div class="col-xs-12 col-md-offset-1 col-md-10">
                {{-- <div class="panel panel-default"> --}}
                {{-- <div class="panel-body"> --}}
                <form id="myForm" method="POST" action="{{ route('task.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title" required>
                    </div>
                    <div class="form-group">
                        <label for="details">Task</label>
                        <textarea id="task" class="form-control" name="task" rows="4" cols="50" style="width: 58em"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="assignee">Assignee(s)</label>
                        <select id="multiple" class="js-states form-control" multiple>
                            <option>js</option>
                            {{-- @if ($users->count() == 0)
                                <option value="">No assignee</option>
                            @else
                                @foreach ($users as $user)
                                    <option value="{{ $user->name }}">{{ $user->role }}</option>
                                @endforeach
                            @endif --}}
                        </select>
                    </div>
              
             
                <div class="text-center mt-5 mb-3">
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>

                {{-- </div> --}}
                
                {{-- </div> --}}
            </div>
        </div>
    </section>

   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("#multiple").select2({
            placeholder: "Select a assignee",
            allowClear: true
        });
    </script>
  
@endsection
  