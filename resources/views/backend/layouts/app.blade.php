<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        {{-- START MENU SIDEBAR --}}
        @include('backend.layouts.sidebar')
        {{-- END MENU SIDEBAR --}}

        <!-- Layout container -->
        <div class="layout-page">

            {{-- START MENU NAVBAR --}}
            @include('backend.layouts.navbar')
            {{-- END MENU NAVBAR --}}

            <!-- Content wrapper -->
            <div class="content-wrapper">
                {{-- START CONTENT --}}
                {{ $slot }}
                {{-- END CONTENT --}}

                {{-- START MENU FOOTER --}}
                @include('backend.layouts.footer')
                {{-- END MENU FOOTER --}}


                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->


    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->
