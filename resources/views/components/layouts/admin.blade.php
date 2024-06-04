<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  data-bs-theme="dark" data-layout-mode="fluid" data-menu-color="light" data-topbar-color="light" data-layout-position="fixed" data-sidenav-size="default" data-sidenav-user="true" class="menuitem-active">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles

        <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/logo/logo@.png')}}">

    <!-- Theme Config Js -->
    <script src="{{asset('assets/admin/js/config.js')}}"></script>

    <!-- App css -->
    <link href="{{asset('assets/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/admin/vendor/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/vendor/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="wrapper">
        {{ $slot }}
    </div>

        @livewireScripts

        <script src="{{asset('assets/admin/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/admin/js/app.min.js')}}"></script>

        <!-- Quill Editor js -->


<!-- Quill Demo js -->
{{-- <script src="{{asset('assets/admin/js/pages/demo.quilljs.js')}}"></script> --}}
<script src="{{ asset('assets/admin/vendor/quill/quill.min.js') }}"></script>


    </body>
</html>
