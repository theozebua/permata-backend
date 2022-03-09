<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky"
    id="navbarBlur" navbar-scroll="true">
    <x-templates class="py-1 px-3">
        <nav aria-label="breadcrumb">
            <h5 class="font-weight-bolder mb-0">{{ $title }}</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <x-nav class="justify-content-end ms-md-auto">
                <x-nav.nav-item class="d-flex align-items-center">
                    <x-nav.nav-link class="text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">{{ auth()->user()->name }}</span>
                    </x-nav.nav-link>
                </x-nav.nav-item>
                <x-nav.nav-item class="d-xl-none ps-3 d-flex align-items-center">
                    <x-nav.nav-link class="text-body p-0 cursor-pointer" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </x-nav.nav-link>
                </x-nav.nav-item>
            </x-nav>
        </div>
    </x-templates>
</nav>
