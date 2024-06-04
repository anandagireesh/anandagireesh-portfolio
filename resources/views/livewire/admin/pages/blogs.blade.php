<div>
    <livewire:admin.navigation.top-bar />
    <livewire:admin.navigation.side-bar />
    <div class="content-page">

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                {{-- <livewire:admin.navigation.breadcrumb :breadTitle="$breadTitle" /> --}}
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                            <h4 class="page-title">{{$breadTitle}}</h4>
                            <ol class="breadcrumb m-0">
                                <li><a href="{{url('add-blog')}}" class="btn btn-success btn-sm me-2" wire:navigate>Add Blog</a></li>
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tripti</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Super Admin</a></li>
                                <li class="breadcrumb-item active">{{$breadTitle}}</li> --}}
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="row">

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
