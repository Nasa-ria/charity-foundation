<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 09:46:17 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

       {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> --}}
       <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet"  href="{{asset('../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}} ">

    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}} ">

    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}} ">

    <link rel="stylesheet" href="{{asset('css/adminlte.min2167.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}} ">

    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}} ">

    <link rel="stylesheet"  href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">


<link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">



<link rel="stylesheet" href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">



<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">

<link rel="stylesheet" href="{{asset('plugins/bs-stepper/css/bs-stepper.min.css')}}">

<link rel="stylesheet" href="{{asset('plugins/dropzone/min/dropzone.min.css')}}">
<link rel="stylesheet" href="{{asset('css/login.css')}}">
{{-- <link rel="stylesheet" href="{{asset('css/eventTag.css')}}"> --}}
<link rel="stylesheet" href="{{asset('css/event.css')}}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<!-- select2-bootstrap4-theme -->
<link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->
<link href="{{asset('css/Select2-bootstrap4.css')}}" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div >
    
            @include('layouts.admin.nav')
            @include('layouts.admin.sidebar')
            @yield('content')
            @include('layouts.admin.footer')
    </div>

    <script src={{ asset("plugins/jquery/jquery.min.js")}}></script>

    <script src={{ asset("plugins/jquery-ui/jquery-ui.min.js")}}></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src={{ asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>

    <script src={{ asset("plugins/chart.js/Chart.min.js")}}></script>

    <script src={{ asset("plugins/sparklines/sparkline.js")}}></script>

    <script src={{ asset("plugins/jqvmap/jquery.vmap.min.js")}}></script>
    <script src={{ asset("plugins/jqvmap/maps/jquery.vmap.usa.js")}}></script>

    <script src={{ asset("plugins/jquery-knob/jquery.knob.min.js")}}></script>

    <script src={{ asset("plugins/moment/moment.min.js")}}></script>
    <script src={{ asset("plugins/daterangepicker/daterangepicker.js")}}></script>

    <script src={{ asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>

    <script src={{ asset("plugins/summernote/summernote-bs4.min.js")}}></script>

    <script src={{ asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>

    <script src={{ asset("js/adminlte2167.js")}}></script>

    <script src={{ asset("js/demo.js")}}></script>

    <script src={{ asset("pages/dashboard.js")}}></script>

    <script src="https://maps.googleapis.com/maps/api/js?&callback=initMap" async defer></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 09:46:42 GMT -->

</html>