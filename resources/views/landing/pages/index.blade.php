@extends('landing.layout.template')

@section('style')

@endsection

@section('content')

    <style>
        .box-index-promotion {
            min-height: 280px;
            width: 100%;
            background-color: #3e083e;
            margin-top: 30px;
        }

        .box-penutup {
            min-height: 30px;
            width: 100%;
            background-color: #180425;
            position: absolute;
        }

        .our-teams-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 0;
            box-sizing: border-box;
        }

        .our-teams-block {
            margin: 10px;
            padding: 0;
            width: 520px;
            height: 100%;
            z-index: 2;
        }

        .our-team-bg {
            background-color: #111;
            border-radius: 5px;
            z-index: 1;
            overflow: hidden;
            background-size: contain;
            background-repeat: no-repeat;
            width: 100%;
            height: 0;
            padding-top: 48.46%;
        }

        .our-team-bg:hover {

            -webkit-filter: opacity(50%);
            -webkit-transition: all 0.3s ease-in-out;
        }

        .wx-widget-container {
            max-width: 1000px !important;
        }

    </style>
    <div class="container-fluid" style="margin-top:100px">
        <div class="row">
            <div class="col-lg-9 p-0">
                <div class="home-slides owl-carousel owl-theme">
                    <div class="single-banner-item banner-bg1">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="main-banner-content">
                                        {{-- <span class="sub-title">Enjoy The Game</span>
                                    <div class="logo">
                                        <img src="assets/img/zelda.png" alt="image">
                                    </div>
                                    <h6>Available Now</h6>
                                    <div class="btn-box">
                                        <a href="#" class="default-btn">Purchase Now</a>
                                        <a href="contact.html" class="optional-btn">Free Trial</a>
                                    </div> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-lg-7 col-md-12">
                                <div class="main-banner-image">
                                    <img src="assets/img/banner-img1.png" alt="image">
                                </div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="single-banner-item banner-bg2">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="main-banner-content">
                                        {{-- <span class="sub-title">Enjoy The Game</span>
                                    <div class="logo">
                                        <img src="assets/img/zelda.png" alt="image">
                                    </div>
                                    <h6>Available Now</h6>
                                    <div class="btn-box">
                                        <a href="#" class="default-btn">Purchase Now</a>
                                        <a href="contact.html" class="optional-btn">Free Trial</a>
                                    </div> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-lg-7 col-md-12">
                                <div class="main-banner-image">
                                    <img src="assets/img/banner-img2.png" alt="image">
                                </div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="single-banner-item banner-bg3">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="main-banner-content">
                                        {{-- <span class="sub-title">Enjoy The Game</span>
                                    <div class="logo">
                                        <img src="assets/img/zelda.png" alt="image">
                                    </div>
                                    <h6>Available Now</h6>
                                    <div class="btn-box">
                                        <a href="#" class="default-btn">Purchase Now</a>
                                        <a href="contact.html" class="optional-btn">Free Trial</a>
                                    </div> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-lg-7 col-md-12">
                                <div class="main-banner-image">
                                    <img src="assets/img/banner-img3.png" alt="image">
                                </div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 align-middle" style="margin-top:10px">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-index-promotion">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="align-center m-3">
                                        <h3>JERSEY 2020</h3>
                                        <h4>Rp. 200,000</h4>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <img src="assets/img/products-img2.jpg" style="height:100%" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="col-lg-12">
                        <div class="box-index-promotion">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-events-area pt-100">
        <div class="container">
            <div class="section-title">
                <h2>NEWS & EVENTS</h2>
            </div>
            <div class="single-news-events-box">
                <div class="news-events-box">
                    <div class="news-events-image">
                        <div class="image bg1">
                            <img src="assets/img/news-events-img1.jpg" alt="image">
                        </div>
                    </div>
                    <div class="news-events-content">
                        <div class="content">
                            <h3><a href="single-tournament.html">CHRONOS MENJUARAI TI20</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <ul class="info">
                                <li><i class="bx bx-calendar"></i>25/04/2021</li>
                            </ul>
                            <a href="single-tournament.html" class="join-now-btn"><i class="flaticon-null"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-news-events-box">
                <div class="news-events-box">
                    <div class="news-events-image">
                        <div class="image bg2">
                            <img src="assets/img/news-events-img2.jpg" alt="image">
                        </div>
                    </div>
                    <div class="news-events-content">
                        <div class="content">
                            <h3><a href="single-tournament.html">CHRONOS MASUK KUALIFIKASI M1</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <ul class="info">
                                <li><i class="bx bx-calendar"></i>25/04/2021</li>
                            </ul>
                            <a href="single-tournament.html" class="join-now-btn"><i class="flaticon-null"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-news-events-box">
                <div class="news-events-box">
                    <div class="news-events-image">
                        <div class="image bg3">
                            <img src="assets/img/news-events-img3.jpg" alt="image">
                        </div>
                    </div>
                    <div class="news-events-content">
                        <div class="content">
                            <h3><a href="single-tournament.html">ESL USA Premiership</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <ul class="info">
                                <li><i class="bx bx-calendar"></i>25/04/2021</li>
                            </ul>
                            <a href="single-tournament.html" class="join-now-btn"><i class="flaticon-null"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-teams ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>MEET OUR TEAMS</h2>
            </div>
            <ul class="our-teams-list" style="list-style-type:none">
                <li class="our-teams-block">
                    <a href="">
                        <div class="our-team-bg" style="background-image: url(assets/img/dota2_teambg.png)">
                        </div>
                    </a>
                </li>
                <li class="our-teams-block">
                    <a href="">
                        <div class="our-team-bg" style="background-image: url(assets/img/dota2_teambg.png)">
                        </div>
                    </a>
                </li>
                <li class="our-teams-block">
                    <a href="">
                        <div class="our-team-bg" style="background-image: url(assets/img/dota2_teambg.png)">
                        </div>
                    </a>
                </li>
                <li class="our-teams-block">
                    <a href="">
                        <div class="our-team-bg" style="background-image: url(assets/img/dota2_teambg.png)">
                        </div>
                    </a>
                </li>
                <li class="our-teams-block">
                    <a href="">
                        <div class="our-team-bg" style="background-image: url(assets/img/dota2_teambg.png)">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <div class="partner-area bg-image pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Valuable Partners</span>
            </div>
            <div class="partner-slides owl-carousel owl-theme">
                <div class="single-partner-item">
                    <a href="#" class="d-block"><img src="assets/img/partner-img1.png" alt="image"></a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block"><img src="assets/img/partner-img2.png" alt="image"></a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block"><img src="assets/img/partner-img3.png" alt="image"></a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block"><img src="assets/img/partner-img4.png" alt="image"></a>
                </div>
                <div class="single-partner-item">
                    <a href="#" class="d-block"><img src="assets/img/partner-img5.png" alt="image"></a>
                </div>
            </div>
        </div>
    </div>


    <section class="our-instagram-area pt-100">
        <div class="container">
            <div class="section-title">
                <h2>OUR INSTAGRAM</h2>
            </div>
        </div>
        <div style="max-height:355px">
            <div data-mc-src="c0474eca-60c4-4626-a5a1-b78df16f8413#instagram"></div>

            <script src="https://cdn2.woxo.tech/a.js#612367ebb1b53e00164e5722" async data-usrc>
            </script>
        </div>
    </section>
    <div class="row">
        <div class="col-lg-12">
            <div class="box-penutup">

            </div>
        </div>
    </div>

    <div class="footer-area-bg-image">
        <section class="pb-70">

        </section>
        {{-- <section class="social-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Official</span>
                    <h2>Stay Conected</h2>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-twitch'></i>
                                Twitch
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape2.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-facebook'></i>
                                Facebook
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape3.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-twitter'></i>
                                Twitter
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape4.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-youtube'></i>
                                YouTube
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape5.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-instagram'></i>
                                Instagram
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape6.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-4 col-6">
                        <div class="single-social-box">
                            <div class="content">
                                <i class='bx bxl-vimeo'></i>
                                Vimeo
                            </div>
                            <div class="shape">
                                <img src="assets/img/social-shape1.png" alt="image">
                                <img src="assets/img/social-shape7.png" alt="image">
                            </div>
                            <a href="#" target="_blank" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    @endsection


    @section('scripts')

    @endsection
