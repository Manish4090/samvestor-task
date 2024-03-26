<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
      
        <link href="{{asset('simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/vendor.bundle.base.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('main-css\style.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style type="text/css">
            .navbar-nav {
                display: flex;
                align-items: center;
                margin: 0;
                padding: 0;
            }

            .navbar-nav li {
                list-style: none;
                margin: 0 10px; /* Adjust the spacing between list items */
            }

        </style>
    </head>
    <body class="font-sans antialiased">
       
            @yield('content')
           
        
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/vendor.bundle.base.js') }}" defer></script>
        <script src="{{ asset('js/off-canvas.js') }}" defer></script>
        <script src="{{ asset('js/misc.js') }}" defer></script>
    </body>
</html>
