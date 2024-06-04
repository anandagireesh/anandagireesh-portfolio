<div>
    <livewire:admin.navigation.top-bar />
    <livewire:admin.navigation.side-bar />
    <div class="content-page">

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <livewire:admin.navigation.breadcrumb :breadTitle="$breadTitle" />

                <div class="row">
                    <div class="col-xl-4 col-lg-5">

                        <livewire:admin.section.about-me />


                    </div> <!-- end col-->

                    <div class="col-xl-8 col-lg-7">

                        <div class="card">
                            <div class="card-body">
                                {{-- <livewire:admin.section.settings-menu /> --}}
                                <div class="tab-content">


                                    <livewire:admin.section.personal-info />
                                    {{-- <livewire:admin.section.tourist-category /> --}}

                                </div> <!-- end tab-content -->
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
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
