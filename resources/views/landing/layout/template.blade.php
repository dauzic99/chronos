<!doctype html>
<html lang="en">

<!-- Mirrored from templates.envytheme.com/zelda/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Aug 2021 05:45:11 GMT -->

<head>
    @include('landing.layout.header')
</head>

<body>

    @include('landing.layout.navbar')


    @include('landing.layout.sidebar')


    @include('landing.layout.search')


    @yield('content')


    <footer class="footer-area">
        <div class="container">
            <div class="footer-content">
                <div class="logo">
                    <a href="index-2.html" class="d-inline-block"><img src="assets/img/logo.png" alt="image"></a>
                    <ul class="footer-menu">
                        <li class="nav-item"><a class="nav-link" href="#">Legal</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Terms of Use</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Privacy policy</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Cockie setting</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Support center</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-5">
                    <p><i class='bx bx-copyright'></i>2022 <a href="index-2.html">Chronos</a>.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>
    <div class="zelda-cursor"></div>
    <div class="zelda-cursor2"></div>

    @include('landing.layout.scripts')
</body>

<!-- Mirrored from templates.envytheme.com/zelda/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Aug 2021 05:45:11 GMT -->

</html>
