<!doctype html>
<html lang="en">
<!--begin::Head-->
@include('layouts.head')
<!--end::Head-->
<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        @include('layouts.header')
        <!--end::Header-->
        <!--begin::Sidebar-->
        @include('layouts.sidebar')
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            @yield('content')
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        @include('layouts.footer')
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    @include('layouts.scripts')
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
</body>
<!--end::Body-->

</html>
