<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
class="light-style layout-navbar-fixed layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-template="vertical-menu-template-starter">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">




        <!-- Page JS -->
        @spladeHead
        <!-- Scripts -->
        @vite([
            'resources/js/app.js',
        ])
        {{-- <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/fontawesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/tabler-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/flag-icons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/rtl/core.css') }}"
            class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/rtl/theme-default.css') }}"
            class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('backend/assets/css/demo.css') }}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/node-waves/node-waves.css') }}" />

        <!-- Page CSS --> --}}

        <!-- Helpers -->
        <script src="{{ asset('backend/assets/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('backend/assets/js/config.js') }}"></script>
    </head>
    <body >
        @splade

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/libs/node-waves/node-waves.js') }}"></script>

        <script src="{{ asset('backend/assets/vendor/libs/hammer/hammer.js') }}"></script>

        <script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="{{ asset('backend/assets/js/main.js') }}"></script>

        <!-- Page JS -->
    </body>
</html>
