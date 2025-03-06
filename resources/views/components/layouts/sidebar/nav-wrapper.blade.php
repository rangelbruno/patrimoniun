@php
    $currentPath = request()->path();

    function isActiveLink($path, $currentPath) {
        if ($path === '/') {
            return $currentPath === '/';
        }
        return str_starts_with($currentPath, ltrim($path, '/'));
    }

    function getLinkClasses($path, $currentPath) {
        $base = "btn btn-custom btn-outline btn-icon btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px";
        return isActiveLink($path, $currentPath)
            ? "{$base} active border-primary border-dashed"
            : "{$base} border-0";
    }

    $links = [
        [ "path" => "/", "icon" => "chart-line", "label" => "Dashboard" ],
    ];
@endphp

<div id="kt_app_sidebar_nav_wrapper" class="d-flex flex-column hover-scroll-y pe-4 me-n4"
    data-kt-scroll="true"
    data-kt-scroll-activate="true"
    data-kt-scroll-height="auto"
    data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
    data-kt-scroll-wrappers="#kt_app_sidebar, #kt_app_sidebar_nav"
    data-kt-scroll-offset="5px">

    <!-- Stats -->
    <div class="d-flex mb-8 mb-lg-20">
        <div class="button button-custom rounded min-w-100px w-100 py-2 px-4 me-6">
            <span class="fs-6 text-gray-600 fw-semibold">Ativos</span>
            <div class="fs-2 fw-bold text-success">R$ 40,230</div>
        </div>

        <div class="button button-custom rounded min-w-100px w-100 py-2 px-4">
            <span class="fs-6 text-gray-600 fw-semibold">Baixa</span>
            <div class="fs-2 fw-bold text-danger">R$ 7,057</div>
        </div>
    </div>

    <!-- Links -->
    <div class="app-sidebar-nav mb-4" id="kt_app_sidebar_nav">
        <div class="links row row-cols-3"
            data-kt-buttons="true"
            data-kt-buttons-target="[data-kt-button]">

            @foreach ($links as $link)
                <div class="col mb-4">
                    <a href="{{ url($link['path']) }}" class="{{ getLinkClasses($link['path'], $currentPath) }}" data-kt-button="true">
                        <span class="mb-2">
                            <i class="fa-solid fa-{{ $link['icon'] }} fs-1"></i>
                        </span>
                        <span class="fs-7 fw-bold">{{ $link['label'] }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
