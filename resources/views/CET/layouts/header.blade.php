<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Dashboard', 'Dashboard') }}</title>

    <link rel="icon" href="{{ asset('..\assets\ICON\CET-ICON.ico') }}" type="SSO ICON">

    <!-- Include AdminLTE CSS -->
    <link href="{{ asset('../dist/css/adminlte.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">


    <!-- Use Vite for JS and CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .custom-sidebar-bg {
            background-image: url("{{ asset('assets/photos/SIDEBAR.png') }}");
            background-size: cover;
            background-position: center;
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        .content-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('assets/photos/CET.png') }}");
            background-size: cover;
            background-position: center;
            opacity: 0.2;
            z-index: -1;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('CET.layouts.navbar')

        <!-- Main Sidebar -->
        @include('CET.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Your page content will be yielded here -->
                    @yield('content')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->


    </div>
    <!-- ./wrapper -->

    <!-- Include AdminLTE JS -->
    <script src="{{ asset('../dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('../plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('../dist/js/adminlte.js') }}"></script>



    <!-- Add extra scripts in specific views -->
    @stack('scripts')
</body>

</html>