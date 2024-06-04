<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles

        <!-- App favicon -->
        <link rel="icon" href="{{asset('assets/img/logo/logo@.png')}}" />

    <!-- Theme Config Js -->
    <script src="{{asset('assets/admin/js/config.js')}}"></script>

    <!-- App css -->
    <link href="{{asset('assets/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('assets/admin/css/icons.min.css"')}} rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="auth-fluid">

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h2 class="mb-3">Welcome to My Profile Admin</h2>
                                <p class="lead"><i class="ri-double-quotes-l"></i>Everything you need is in this template. Love the overall look and feel. Not too flashy, and still very professional and smart.
                                </p>
                                <p>
                                    - Admin User
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2 class="mb-3">Graphical Dashboard</h2>
                                <p class="lead"><i class="ri-double-quotes-l"></i> Pretty nice theme, hoping you guys could add more features to this. Keep up the good work.
                                </p>
                                <p>
                                    - Admin User
                                </p>
                            </div>
                            <div class="carousel-item">
                                <h2 class="mb-3">Update the tourism</h2>
                                <p class="lead"><i class="ri-double-quotes-l"></i> This is a great product, helped us a lot and very quick to work with and implement.
                                </p>
                                <p>
                                    - Admin User
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        {{ $slot }}

    </div>

        @livewireScripts

        <script src="{{asset('assets/admin/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/admin/js/app.min.js')}}"></script>
        <!-- Google Maps API -->
        <script src="https://maps.google.com/maps/api/js"></script>
        <script src="{{asset('assets/admin/vendor/gmaps/gmaps.min.js')}}"></script>
        <!-- Google Maps Demo js -->
        <script src="{{asset('assets/admin/js/pages/demo.google-maps.js')}}"></script>
    </body>
</html>
