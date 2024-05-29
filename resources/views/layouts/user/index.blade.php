
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Sadakat - Charity Nonprofit HTML 5 Template</title>
    <link href="{{asset('css/themify-icons.css"')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{asset('css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/light.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('css/todo.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/signup.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}

    
 
    {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> --}}
      {{-- [if lt IE 9] --}}
    {{-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>   --}}
    {{-- [endif] --}}
   
    
  


</head>

<body>
   



        @include('layouts.user.nav')
        {{-- @include('layouts.messages') --}}
        @yield('content')
        @include('layouts.user.footer')
        
        <!-- All JavaScript files
    ================================================== -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins for this template -->
    <script src="{{asset('js/jquery-plugin-collection.js')}}"></script>
    <script src="{{asset('js/gsap.min.js')}}"></script>
    <!-- Custom script for this template -->
    <script src="{{asset('js/script.js')}}"></script>
    {{-- <script src="{{asset('js/todo.js')}}"></script> --}}
</body>

</html>