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
