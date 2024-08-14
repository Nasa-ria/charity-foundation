@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper " style="margin-top: 4em">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    To Do List
                </h3>
                <div class="card-footer clearfix">
                    <a class="theme-btn  float-right" href="{{ route('task.create') }}">
                        <i class="fas fa-plus"></i>add</a></td></a>
                </div>
                <div class="card-tools">
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a href="#" class="page-link">&laquo;</a>
                        </li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                    <li>

                        <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>

                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value name="todo1" id="todoCheck1">
                            <label for="todoCheck1"></label>
                        </div>

                        <span class="text">Design a nice theme</span>

                        <small class="badge badge-danger"><i class="far fa-clock"></i> 2
                            mins</small>

                        <div class="tools">
                          {{-- <a href="{{route('task.edit',$task->id)}}" ><i class="fas fa-edit"></i></a>  --}}
                            <i class="fas fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value name="todo2" id="todoCheck2" checked>
                            <label for="todoCheck2"></label>
                        </div>
                        <span class="text">Make the theme responsive</span>
                        <small class="badge badge-info"><i class="far fa-clock"></i> 4
                            hours</small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value name="todo3" id="todoCheck3">
                            <label for="todoCheck3"></label>
                        </div>
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-warning"><i class="far fa-clock"></i> 1
                            day</small>

                        <span id="status"></span>

                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                            <small class="badge badge-w">
                                <div class="dropdown">
                                    Status
                                    <button class="btn dropdown-toggle btn-sm" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" onclick="changeStatus('No selection')">No
                                            selection</a>
                                        <a class="dropdown-item" href="#" onclick="changeStatus('Done')">Done</a>
                                        <a class="dropdown-item" href="#"
                                            onclick="changeStatus('Process')">Process</a>
                                        <a class="dropdown-item" href="#"
                                            onclick="changeStatus('Created')">Created</a>
                                    </div>
                                </div>
                            </small>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value name="todo4" id="todoCheck4">
                            <label for="todoCheck4"></label>
                        </div>
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-success"><i class="far fa-clock"></i> 3
                            days</small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value name="todo5" id="todoCheck5">
                            <label for="todoCheck5"></label>
                        </div>
                        <span class="text">Check your messages and notifications</span>
                        <small class="badge badge-primary"><i class="far fa-clock"></i> 1
                            week</small> <small class="badge badge-primary"><i class="far fa-clock"></i> assignee:
                            Ama Kobby</small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value name="todo6" id="todoCheck6">
                            <label for="todoCheck6"></label>
                        </div>
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1
                            month</small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
        function changeStatus(selectedValue) {
            var statusElement = document.getElementById("status");

            // Set text content based on selected value
            statusElement.textContent = selectedValue;

            // Reset previous classes
            statusElement.className = "";

            // Apply Bootstrap badge classes dynamically
            switch (selectedValue) {
                case "Done":
                    statusElement.classList.add("badge", "badge-warning");
                    break;
                case "Process":
                    statusElement.classList.add("badge", "badge-primary");
                    break;
                case "Created":
                    statusElement.classList.add("badge", "badge-success");
                    break;
                default:
                    // Handle default case if needed
                    break;
            }
        }
    </script>
@endsection
