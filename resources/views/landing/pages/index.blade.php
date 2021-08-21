@extends('landing.layout.template')

@section('style')

@endsection

@section('content')
    <div class="main-banner jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="main-banner-content">
                <span class="sub-title wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Enjoy The
                    Game</span>
                <div class="logo wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <img src="assets/img/zelda.png" alt="image">
                </div>
                <h6 class="wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1000ms">Available Now</h6>
                <div class="btn-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <a href="#" class="default-btn">Purchase Now</a>
                    <a href="contact.html" class="optional-btn">Free Trial</a>
                </div>
            </div>

            <div class="banner-video-slides owl-carousel owl-theme">
                <div class="banner-video-box">
                    <img src="assets/img/main-banner-video-img1.jpg" alt="image">
                    <div class="content">
                        <a href="https://www.youtube.com/watch?v=Y5KCDWi7h9o" class="video-btn popup-youtube"><i
                                class="flaticon-play"></i></a>
                        <span class="title">official Trailer 1</span>
                    </div>
                </div>
                <div class="banner-video-box">
                    <img src="assets/img/main-banner-video-img2.jpg" alt="image">
                    <div class="content">
                        <a href="https://www.youtube.com/watch?v=Y5KCDWi7h9o" class="video-btn popup-youtube"><i
                                class="flaticon-play"></i></a>
                        <span class="title">official Trailer 2</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="matches-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Matches</span>
                <h2>Battles Extreme Masters Tournament</h2>
            </div>
            <div class="single-matches-box">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="matches-team">
                            <img src="assets/img/team1.png" class="wow fadeInLeft" data-wow-delay="00ms"
                                data-wow-duration="1500ms" alt="image">
                            <div class="content">
                                <h3><a href="single-team.html">Fierce</a></h3>
                                <ul class="watch-list">
                                    <li><span>Watch</span></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="matches-result">
                            <ul>
                                <li>9</li>
                                <li>14</li>
                            </ul>
                            <span class="date-time">20TH May 2021, 23:00</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="matches-team right-image">
                            <img src="assets/img/team2.png" class="wow fadeInRight" data-wow-delay="00ms"
                                data-wow-duration="1500ms" alt="image">
                            <div class="content">
                                <h3><a href="single-team.html">Devlis</a></h3>
                                <ul class="watch-list">
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                    <li><span>Watch</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-matches-box">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="matches-team">
                            <img src="assets/img/team3.png" class="wow fadeInLeft" data-wow-delay="100ms"
                                data-wow-duration="1500ms" alt="image">
                            <div class="content">
                                <h3><a href="single-team.html">Skullking</a></h3>
                                <ul class="watch-list">
                                    <li><span>Watch</span></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="matches-result">
                            <ul>
                                <li>10</li>
                                <li>8</li>
                            </ul>
                            <span class="date-time">19TH May 2021, 22:00</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="matches-team right-image">
                            <img src="assets/img/team4.png" class="wow fadeInRight" data-wow-delay="100ms"
                                data-wow-duration="1500ms" alt="image">
                            <div class="content">
                                <h3><a href="single-team.html">Gurdian</a></h3>
                                <ul class="watch-list">
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                    <li><span>Watch</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-matches-box">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="matches-team">
                            <img src="assets/img/team5.png" class="wow fadeInLeft" data-wow-delay="200ms"
                                data-wow-duration="1500ms" alt="image">
                            <div class="content">
                                <h3><a href="single-team.html">Rover</a></h3>
                                <ul class="watch-list">
                                    <li><span>Watch</span></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="matches-result">
                            <ul>
                                <li>10</li>
                                <li>10</li>
                            </ul>
                            <span class="date-time">18TH May 2021, 21:00</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="matches-team right-image">
                            <img src="assets/img/team6.png" class="wow fadeInRight" data-wow-delay="200ms"
                                data-wow-duration="1500ms" alt="image">
                            <div class="content">
                                <h3><a href="single-team.html">Gleopsis</a></h3>
                                <ul class="watch-list">
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                    <li><span>Watch</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-matches-box">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="matches-team">
                            <img src="assets/img/team7.png" class="wow fadeInLeft" data-wow-delay="300ms"
                                data-wow-duration="1500ms" alt="image">
                            <div class="content">
                                <h3><a href="single-team.html">Solider</a></h3>
                                <ul class="watch-list">
                                    <li><span>Watch</span></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="matches-result">
                            <ul>
                                <li>14</li>
                                <li>15</li>
                            </ul>
                            <span class="date-time">17TH May 2021, 24:00</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="matches-team right-image">
                            <img src="assets/img/team8.png" class="wow fadeInRight" data-wow-delay="300ms"
                                data-wow-duration="1500ms" alt="image">
                            <div class="content">
                                <h3><a href="single-team.html">Roosgun</a></h3>
                                <ul class="watch-list">
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top"
                                            title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                    <li><span>Watch</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape1"><img src="assets/img/shape1.png" class="wow fadeInLeft" data-wow-delay="00ms"
                data-wow-duration="1500ms" alt="image"></div>
        <div class="shape2"><img src="assets/img/shape2.png" class="wow fadeInRight" data-wow-delay="00ms"
                data-wow-duration="1500ms" alt="image"></div>
        <div class="shape3"><img src="assets/img/shape3.png" class="wow fadeInLeft" data-wow-delay="00ms"
                data-wow-duration="1500ms" alt="image"></div>
        <div class="shape4"><img src="assets/img/shape4.png" class="wow fadeInRight" data-wow-delay="00ms"
                data-wow-duration="1500ms" alt="image"></div>
    </section>


    <section class="blog-area pb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Blog</span>
                <h2>News And Updates</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="blog-slides owl-carousel owl-theme">
                <div class="single-blog-post-item">
                    <div class="row m-0">
                        <div class="col-lg-6 p-0">
                            <div class="post-image bg-1">
                                <img src="assets/img/blog-img1.jpg" alt="image">
                                <a href="single-blog-1.html" class="link-btn"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="post-content">
                                <span class="sub-title">Release Note</span>
                                <h3><a href="single-blog-1.html">ANDROID TOOLS FOR MOBILE GAME</a></h3>
                                <a href="single-blog-1.html" class="default-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-blog-post-item">
                    <div class="row m-0">
                        <div class="col-lg-6 p-0">
                            <div class="post-image bg-2">
                                <img src="assets/img/blog-img2.jpg" alt="image">
                                <a href="single-blog-1.html" class="link-btn"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="post-content">
                                <span class="sub-title">Release Note</span>
                                <h3><a href="single-blog-1.html">CONVERSION RATE THE SALES FUNNEL</a></h3>
                                <a href="single-blog-1.html" class="default-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-blog-post-item">
                    <div class="row m-0">
                        <div class="col-lg-6 p-0">
                            <div class="post-image bg-3">
                                <img src="assets/img/blog-img3.jpg" alt="image">
                                <a href="single-blog-1.html" class="link-btn"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="post-content">
                                <span class="sub-title">Release Note</span>
                                <h3><a href="single-blog-1.html">HOW TO HIT THE MARK WITH MOBILE GAMES</a></h3>
                                <a href="single-blog-1.html" class="default-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="awards-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="awards-image">
                        <img src="assets/img/ninja.png" alt="image">
                        <div class="shape">
                            <img src="assets/img/circle-shape.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="awards-content">
                        <span class="sub-title">Awards</span>
                        <h2>Game Of The Year</h2>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 col-md-3 col-4">
                                <div class="image">
                                    <img src="assets/img/awards1.png" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-4">
                                <div class="image">
                                    <img src="assets/img/awards2.png" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-4">
                                <div class="image">
                                    <img src="assets/img/awards3.png" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-4">
                                <div class="image">
                                    <img src="assets/img/awards4.png" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-4">
                                <div class="image">
                                    <img src="assets/img/awards5.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="shape">
                            <img src="assets/img/awards-shape1.png" alt="image">
                            <img src="assets/img/awards-shape2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title">
                        <span class="sub-title">Team Members</span>
                        <h2>Meet Our Team The "Junior Zelda"</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-member">
                        <img src="assets/img/team-member1.jpg" alt="image">
                        <div class="content">
                            <h3>Sarah Taylor</h3>
                            <span>Sarah3s</span>
                        </div>
                        <a href="single-player.html" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-member">
                        <img src="assets/img/team-member2.jpg" alt="image">
                        <div class="content">
                            <h3>Merv Adrian</h3>
                            <span>Zelda3s</span>
                        </div>
                        <a href="single-player.html" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-member">
                        <img src="assets/img/team-member3.jpg" alt="image">
                        <div class="content">
                            <h3>Carla Gentry</h3>
                            <span>3s.King</span>
                        </div>
                        <a href="single-player.html" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-member">
                        <img src="assets/img/team-member4.jpg" alt="image">
                        <div class="content">
                            <h3>Liam Oliver</h3>
                            <span>Junior.Zelda</span>
                        </div>
                        <a href="single-player.html" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-member">
                        <img src="assets/img/team-member5.jpg" alt="image">
                        <div class="content">
                            <h3>Emma Olivia</h3>
                            <span>King.Zelda</span>
                        </div>
                        <a href="single-player.html" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-member">
                        <img src="assets/img/team-member6.jpg" alt="image">
                        <div class="content">
                            <h3>Elijah William</h3>
                            <span>Zelda</span>
                        </div>
                        <a href="single-player.html" class="link-btn"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="products-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Shop</span>
                <h2>Our Gaming Products</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="single-products.html" class="d-block"><img src="assets/img/products-img1.jpg"
                                    alt="image"></a>
                            <a href="#" class="add-to-cart-btn">Add To Cart</a>
                        </div>
                        <div class="products-content">
                            <h3><a href="single-products.html">Gaming Headphone</a></h3>
                            <span class="price">$99.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="single-products.html" class="d-block"><img src="assets/img/products-img2.jpg"
                                    alt="image"></a>
                            <a href="#" class="add-to-cart-btn">Add To Cart</a>
                        </div>
                        <div class="products-content">
                            <h3><a href="single-products.html">Gaming Chair</a></h3>
                            <span class="price">$199.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="single-products.html" class="d-block"><img src="assets/img/products-img3.jpg"
                                    alt="image"></a>
                            <a href="#" class="add-to-cart-btn">Add To Cart</a>
                        </div>
                        <div class="products-content">
                            <h3><a href="single-products.html">Gaming Mouse</a></h3>
                            <span class="price">$69.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 offset-lg-0 offset-md-4">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="single-products.html" class="d-block"><img src="assets/img/products-img4.jpg"
                                    alt="image"></a>
                            <a href="#" class="add-to-cart-btn">Add To Cart</a>
                        </div>
                        <div class="products-content">
                            <h3><a href="single-products.html">Gaming Pad</a></h3>
                            <span class="price">$299.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="partner-area pt-100 pb-70 pt-0-res">
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
        <div class="partner-shape1"><img src="assets/img/partner-shape.png" alt="image"></div>
    </div>


    <section class="subscribe-area">
        <div class="container">
            <div class="subscribe-inner ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
                <span class="sub-title">Get Updates</span>
                <h2>Zelda Newsletter</h2>
                <form class="newsletter-form" data-bs-toggle="validator">
                    <label><i class="flaticon-null-1"></i></label>
                    <input type="text" class="input-newsletter" placeholder="Enter your email address" name="EMAIL" required
                        autocomplete="off">
                    <button type="submit" class="default-btn">Subscribe Now</button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </section>


    <section class="social-area pt-100 pb-70">
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
    </section>

@endsection


@section('scripts')

@endsection