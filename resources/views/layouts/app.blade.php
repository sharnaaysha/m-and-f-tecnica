<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="none">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>M&F Tecnica</title>
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" media="all">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}" media="all">
    </head>
    <body>
        @include('inc.jumbotron')
        @include('inc.navbar')
        @yield('content');
        @include('inc.footer');
            
            
            
        <script src="{{asset('/js/jquery-3.4.0.js')}}"></script>  
        <script src="{{asset('/js/popper.js')}}"></script>  
        <script src="{{asset('/js/bootstrap.js')}}"></script> 
    </body>

</html>