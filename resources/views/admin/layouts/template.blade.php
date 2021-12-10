<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.header')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            @include('admin.layouts.navbar')

            @include('admin.layouts.sidebar')

            <!-- Main Content -->
            @yield('content')

            @include('admin.layouts.footer')

            @yield('modal')
        </div>
    </div>

    <!-- General JS Scripts -->
    @include('admin.layouts.scripts')
</body>

</html>
