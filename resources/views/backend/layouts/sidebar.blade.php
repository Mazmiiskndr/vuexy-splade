<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">

        {{-- START LOGO --}}
        <x-dashboard.sidebar-logo/>
        {{-- END LOGO --}}

    {{-- FIXME: ERROR --}}
    <button class="layout-menu-toggle menu-link text-large ms-auto" style="background:none;border:none;">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </button>


    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <x-side-link :active="request()->routeIs('backend.dashboard')">
            <Link class="menu-link" href="{{ route('backend.dashboard') }}">
            <i class="menu-icon tf-icons ti ti-dashboard"></i>
            <div data-i18n="Dashboard">Dashboard</div>
            </Link>
        </x-side-link>
        <x-side-link :active="request()->routeIs('backend.test')">
            <Link class="menu-link" href="{{ route('backend.test') }}">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Page 1">Page 2</div>
            </Link>
        </x-side-link>
    </ul>
</aside>
<!-- / Menu -->
