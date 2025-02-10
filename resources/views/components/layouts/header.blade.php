<header id="kt_app_header" class="app-header"
    data-kt-sticky="true"
    data-kt-sticky-activate="{default: true, lg: true}"
    data-kt-sticky-name="app-header-minimize"
    data-kt-sticky-offset='{default: "200px", lg: "300px"}'
    data-kt-sticky-animation="false">

    <div class="app-container container-xxl d-flex align-items-center justify-content-between">
        <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between">

            <!-- Menu Navigation -->
            <nav class="app-header-menu app-header-mobile-drawer align-items-stretch"
                data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu"
                data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true"
                data-kt-drawer-width="250px"
                data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle"
                data-kt-swapper="true"
                data-kt-swapper-mode='{default: "append", lg: "prepend"}'
                data-kt-swapper-parent='{default: "#kt_app_body", lg: "#kt_app_header_wrapper"}'
                aria-label="Main navigation">

                <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row
                    menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500
                    my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" role="navigation">

                    <!-- Adicione aqui os links do menu caso necessário -->


                </div>
            </nav>

            <!-- Logo Section -->
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none"
                    id="kt_app_sidebar_toggle" aria-label="Toggle sidebar">
                    <i class="fa-solid fa-qrcode fs-2" role="img" aria-hidden="true"></i>
                </button>

                <a href="/" class="d-flex d-lg-none" aria-label="Home page">
                    <img src="{{ asset('assets/media/logos/default-dark.svg') }}"
                        alt="Light theme logo"
                        class="h-25px theme-light-show"
                        loading="eager"
                        width="100" height="40">

                    <img src="{{ asset('assets/media/logos/default.svg') }}"
                        alt="Dark theme logo"
                        class="h-25px theme-dark-show"
                        loading="eager"
                        width="100" height="40">
                </a>
            </div>

            <!-- Mobile Navigation Toggle -->
            <div class="app-navbar flex-shrink-0">
                <div class="app-navbar-item d-lg-none ms-2 me-n4">
                    <button class="btn btn-icon btn-color-gray-600 btn-active-color-primary"
                        id="kt_app_header_menu_toggle"
                        aria-label="Toggle menu"
                        aria-expanded="false"
                        aria-controls="kt_app_header_menu">
                        <i class="fa-solid fa-bars fs-2" role="img" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

@push('styles')
<style>
    .app-header {
        --theme-light-display: block;
        --theme-dark-display: none;
        background: var(--kt-header-bg);
        box-shadow: var(--kt-header-box-shadow);
    }

    [data-theme="dark"] .app-header {
        --theme-light-display: none;
        --theme-dark-display: block;
    }

    .theme-light-show {
        display: var(--theme-light-display);
    }

    .theme-dark-show {
        display: var(--theme-dark-display);
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Inicializar interações do cabeçalho
        const menuToggle = document.getElementById("kt_app_header_menu_toggle");
        const headerMenu = document.querySelector(".app-header-menu");

        if (menuToggle && headerMenu) {
            menuToggle.addEventListener("click", () => {
                const isExpanded = menuToggle.getAttribute("aria-expanded") === "true";
                menuToggle.setAttribute("aria-expanded", String(!isExpanded));
                headerMenu.classList.toggle("active");
            });
        }
    });
</script>
@endpush
