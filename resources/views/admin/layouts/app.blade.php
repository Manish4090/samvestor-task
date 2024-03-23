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
    </head>
    <body class="font-sans antialiased">
        <div class="container-scroller">
            @include('admin.layouts.navbar')
            <div class="container-fluid page-body-wrapper">
            @include('admin.layouts.sidebar')
            @yield('content')
           
        </div>


        </div>
       <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

<!-- Your custom scripts -->
<script src="{{ asset('js/vendor.bundle.base.js') }}" defer></script>
<script src="{{ asset('js/off-canvas.js') }}" defer></script>
<script src="{{ asset('js/misc.js') }}" defer></script>
<script src="{{ asset('js/data-table/datatable-script.js') }}"></script>

    </body>
</html>