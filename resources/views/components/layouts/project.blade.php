<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="icon" href="{{asset('assets/img/favicon.png')}}" />
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/lightgallery.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    </head>
    <body id="home">
        <livewire:web.navigation.top-bar-project />
        {{ $slot }}
        @livewireScripts
        <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slick.min.js')}}"></script>
        <script src="{{asset('assets/js/lightgallery.min.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/ripples.min.js')}}"></script>
        <script src="{{asset('assets/js/particles.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
        <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> 
<x-livewire-alert::flash />
    </body>
</html>
