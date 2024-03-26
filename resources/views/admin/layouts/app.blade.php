<!doctype html>
<html >
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <meta name="apple-mobile-web-app-capable" content="black" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- PWA  -->
        <meta name="theme-color" content="#0C1764"/>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

      
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

      
        <link href="{{asset('simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/vendor.bundle.base.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('main-css\style.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
    </head>
    <body class="font-sans antialiased">
        <div class="container-scroller">
            @include('admin.layouts.navbar')
            <div class="container-fluid page-body-wrapper">
                @include('admin.layouts.sidebar')
                @yield('content')
                @include('admin.layouts.script')
            </div>
        </div>
      
        


    </body>
</html>