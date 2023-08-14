@extends('Main_Section.layouts.app')
@section('content')
    <!-- ****** Welcome Slides Area Start ****** -->
    <section class="welcome_area">
        <div class="welcome_slides owl-carousel">
            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay"
                style="background-image: url(assets/img/bg-img/banner1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInDown" data-delay="0" data-duration="500ms"
                                    style="letter-spacing: 12px; font-size: 1.2em; font-weight: 600; color: #ffb900; margin-top: 1em;">
                                    Special for today</p>
                                <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">FASHION <span
                                        style="color: #2fdab8">TRENDS</span></h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s"
                                    data-duration="500ms">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay"
                style="background-image: url(assets/img/bg-img/banner2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInDown" data-delay="0" data-duration="500ms"
                                    style="letter-spacing: 12px; font-size: 1.2em; font-weight: 600; color: #ffb900; margin-top: 1em;">
                                    Special for today</p>
                                <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">SUMMER <span
                                        style="color: #2fdab8">COLLECTION</span>
                                </h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s"
                                    data-duration="500ms">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay"
                style="background-image: url(assets/img/bg-img/banner3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInDown" data-delay="0" data-duration="500ms"
                                    style="letter-spacing: 12px; font-size: 1.2em; font-weight: 600; color: #ffb900; margin-top: 1em;">
                                    Special for today</p>
                                <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">THE <span
                                        style="color: #2fdab8">BIGGEST</span> SALE
                                </h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s"
                                    data-duration="500ms">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay"
                style="background-image: url(assets/img/bg-img/banner4.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInDown" data-delay="0" data-duration="500ms"
                                    style="letter-spacing: 12px; font-size: 1.2em; font-weight: 600; color: #ffb900; margin-top: 1em;">
                                    Special for today</p>
                                <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">WOMEN <span
                                        style="color: #2fdab8">FASHION</span>
                                </h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s"
                                    data-duration="500ms">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay"
                style="background-image: url(assets/img/bg-img/banner5.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInDown" data-delay="0" data-duration="500ms"
                                    style="letter-spacing: 12px; font-size: 1.2em; font-weight: 600; color: #ffb900; margin-top: 1em;">
                                    Special for today</p>
                                <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">THE <span
                                        style="color: #2fdab8">BIGGEST</span> SALE
                                </h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s"
                                    data-duration="500ms">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{ asset('assets/img/bg-img/bottom1.jpg') }}" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><span>F</span>all Ahead</h3>
                            <p>New Arrivals</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{ asset('assets/img/bg-img/bottom2.jpg') }}" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><span>F</span>all Ahead</h3>
                            <p>New Arrivals</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- ****** Welcome Slides Area End ****** -->


    <!--/grids-->
    <div class="row agile_last_double_sectionw3ls">
        <div class="col-md-6 multi-gd-img multi-gd-text ">

            <a href="">
                <img src="{{ asset('assets/img/bg-img/bot_1.jpg') }}" alt=" ">
                <h4>Flat <span>50%</span> offer</h4>

            </a>

        </div>
        <div class="col-md-6 multi-gd-img multi-gd-text ">

            <a href="">
                <img src="{{ asset('assets/img/bg-img/bot_2.jpg') }}" alt=" ">
                <h4>Flat <span>50%</span> offer</h4>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--/grids-->



    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!---728x90--->
            <h3 class="wthree_text_info">What's <span>Trending</span></h3>

            <div class="row">
                <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
                    <a
                        href="https://p.w3layouts.com/demos_new/template_demo/20-06-2017/elite_shoppy-demo_Free/143933984/web/women.html">
                        <div class="bb-left-agileits-w3layouts-inner grid">
                            <figure class="effect-roxy">
                                <img src="{{ asset('assets/img/bg-img/bb1.jpg') }}" alt=" "
                                    class="img-responsive">
                                <figcaption>
                                    <h3><span>S</span>ale </h3>
                                    <p>Upto 55%</p>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
                <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
                    <div class="bb-middle-agileits-w3layouts grid">
                        <figure class="effect-roxy">
                            <img src="{{ asset('assets/img/bg-img/bottom3.jpg') }}" alt=" "
                                class="img-responsive">
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="bb-middle-agileits-w3layouts forth grid">
                        <figure class="effect-roxy">
                            <img src="{{ asset('assets/img/bg-img/bottom4.jpg') }}" alt=" "
                                class="img-responsive">
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 65%</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>





    {{--  --}}
   
    <!-- /we-offer -->
    <div class="sale-w3ls">
        <div class="container">
            <h6>We Offer Flat <span>40%</span> Discount</h6>

            <a class="hvr-outline-out button2" href="single.html">Shop Now </a>
        </div>
    </div>
    <!-- //we-offer -->
@endsection
