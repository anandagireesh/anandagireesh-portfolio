<div>
    <livewire:admin.navigation.top-bar />
    <livewire:admin.navigation.side-bar />
    {{-- @assets

    <link href="{{asset('assets/admin/vendor/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/vendor/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
@endassets --}}
    <div class="content-page">

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <livewire:admin.navigation.breadcrumb :breadTitle="$breadTitle" />

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="mb-2">
                                        <h4 class="header-title mt-2">Add Blog</h4>

                                        <livewire:admin.section.blog-form />


                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end row-->

            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        <livewire:admin.navigation.footer />
        <!-- end Footer -->
    </div>

</div>


