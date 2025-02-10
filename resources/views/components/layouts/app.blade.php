<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metatags essenciais -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="pt-BR">
    <meta name="description" content="Painel administrativo">
    <meta name="keywords" content="admin,dashboard,gestão">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" type="image/x-icon">

    <!-- Título da página -->
    <title>{{ $title ?? 'Admin Dashboard' }}</title>

    <!-- Fontes -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/solid.min.css') }}" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css">

    <!-- Scripts globais -->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    @stack('styles')
</head>

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
    class="app-default">

    <!-- Estrutura principal da aplicação -->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <x-layouts.header />

            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <x-layouts.sidebar />

                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <div class="d-flex flex-column flex-column-fluid">
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>

                    <x-layouts.footer />
                </div>
            </div>
        </div>
    </div>

    <!-- Elementos fixos -->
    <div
        class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </div>

    @stack('scripts')
</body>

</html>
