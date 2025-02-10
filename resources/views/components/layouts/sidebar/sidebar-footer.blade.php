@php
    $userName = $userName ?? 'Bruno Rangel';
    $userRole = $userRole ?? 'Engenheiro de Software';
    $userAvatar = $userAvatar ?? asset('assets/media/avatars/300-3.jpg');
@endphp

<div class="app-sidebar-footer d-flex flex-center px-4 py-4 py-lg-8" id="kt_app_sidebar_footer">
    <!-- User Info -->
    <div class="user-toolbar d-flex align-items-center rounded px-5 py-3 mb-2">
        <!-- User Avatar -->
        <div class="cursor-pointer symbol me-3 ms-n2">
            <img class="avatar" src="{{ $userAvatar }}" alt="user">
        </div>

        <!-- User Details -->
        <div class="d-flex flex-column align-items-start flex-grow-1">
            <a href="#" class="user-toolbar-title fs-6 fw-bold">{{ $userName }}</a>
            <a href="#" class="user-toolbar-desc fs-7 fw-semibold d-block">{{ $userRole }}</a>
        </div>

        <!-- User Menu Button -->
        <div>
            <button class="btn btn-icon btn-custom me-n2"
                data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-overflow="true"
                data-kt-menu-attach="parent"
                data-kt-menu-placement="top-start">
                <i class="fa-solid fa-list fs-1"></i>
            </button>

            <!-- User Account Menu -->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                data-kt-menu="true">

                <!-- User Info -->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="{{ $userAvatar }}">
                        </div>

                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">
                                {{ $userName }}
                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                            </div>
                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ $userRole }}</a>
                        </div>
                    </div>
                </div>

                <div class="separator my-2"></div>

                <!-- Account Options -->
                <div class="menu-item px-5">
                    <a href="#" class="menu-link px-5">Meu Perfil</a>
                </div>

                <div class="menu-item px-5">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-text">Meus Projetos</span>
                        <span class="menu-badge">
                            <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                        </span>
                    </a>
                </div>

                <div class="separator my-2"></div>

                <!-- Theme Mode -->
                <div class="menu-item px-5">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title position-relative">
                            Modo
                            <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                <i class="fa-solid fa-moon theme-dark-show fs-2"></i>
                                <i class="fa-solid fa-sun theme-light-show fs-2"></i>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="separator my-2"></div>

                <!-- Logout -->
                <div class="menu-item px-5">
                    <a href="" class="menu-link px-5">Sair</a>
                </div>

            </div>
        </div>
    </div>
</div>
