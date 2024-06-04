<div>
    <div class="leftside-menu">

        <!-- Brand Logo Light -->
        <a href="index.html" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{asset('assets/img/logo/logo@.png')}}" alt="logo">
            </span>
            <span class="logo-sm">
                <img src="{{asset('assets/img/logo/logo@.png')}}" alt="small logo">
            </span>
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-lg">
                <img src="{{asset('assets/img/logo/logo.png')}}" alt="dark logo">
            </span>
            <span class="logo-sm">
                <img src="{{asset('assets/img/logo/logo@.png')}}" alt="small logo">
            </span>
        </a>

        <!-- Sidebar Hover Menu Toggle Button -->
        <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
            <i class="ri-checkbox-blank-circle-line align-middle"></i>
        </div>

        <!-- Full Sidebar Menu Close Button -->
        <div class="button-close-fullsidebar">
            <i class="ri-close-fill align-middle"></i>
        </div>

        <!-- Sidebar -left -->
        <div class="h-100" id="leftside-menu-container" data-simplebar>
            <!-- Leftbar User -->
            {{-- <div class="leftbar-user p-3 text-white">
                <a href="pages-profile.html" class="d-flex align-items-center text-reset">
                    <div class="flex-shrink-0">
                        <img src="{{asset('assets/admin/images/users/avatar-1.jpg')}}" alt="user-image" height="42" class="rounded-circle shadow">
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <span class="fw-semibold fs-15 d-block">{{Auth::user()->name}}</span>
                        <span class="fs-13">{{Auth::user()->role}}</span>
                    </div>
                    <div class="ms-auto">
                        <i class="ri-arrow-right-s-fill fs-20"></i>
                    </div>
                </a>
            </div> --}}

            <!--- Sidemenu -->
            <ul class="side-nav">

                <li class="side-nav-title mt-1"> Main</li>

                <li class="side-nav-item">
                    <a href="{{url('dashboard')}}" class="side-nav-link">
                        <i class="ri-dashboard-2-fill"></i>
                        <span class="badge bg-success float-end">9+</span>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="{{url('blogs')}}" class="side-nav-link">
                        <i class="ri-briefcase-4-fill"></i>
                        <span> Blogs </span>
                    </a>
                </li>

                <li class="side-nav-title mt-1"> Settings</li>
                <li class="side-nav-item">
                    <a href="{{url('my-account')}}" class="side-nav-link">
                        <i class="ri-briefcase-4-fill"></i>
                        <span> My Account </span>
                    </a>
                </li>
                {{-- <li class="side-nav-item">
                    <a href="{{url('tourist-category')}}" class="side-nav-link">
                        <i class="ri-briefcase-4-fill"></i>
                        <span> Tourist Category </span>
                    </a>
                </li> --}}
            </ul>
            <!--- End Sidemenu -->

            <div class="clearfix"></div>
        </div>
    </div>
