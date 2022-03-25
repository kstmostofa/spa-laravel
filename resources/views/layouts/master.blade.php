<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        @include('layouts.sidebar')
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            @include('layouts.topbar_mobile')
            <!-- Start Topbar -->
            @include('layouts.topbar')
            <!-- End Topbar -->
            @yield('content')
            <!-- End Contentbar -->
            @include('layouts.footer')
</body>

</html>
