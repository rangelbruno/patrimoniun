<div id="kt_app_sidebar" class="app-sidebar flex-column"
    data-kt-drawer="true"
    data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="275px"
    data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_app_sidebar_toggle">

    <!-- Logo -->
    {{-- @include('layouts.sidebar.logo') --}}
    <x-layouts.sidebar.logo />

    <!-- Sidebar Navigation -->
    <div class="flex-column-fluid px-4 px-lg-8 py-4 py-lg-8" id="kt_app_sidebar_nav">
        {{-- @include('layouts.sidebar.nav-wrapper') --}}
        <x-layouts.sidebar.nav-wrapper />
    </div>

    <!-- Sidebar Footer -->
    <x-layouts.sidebar.sidebar-footer />
</div>
