@extends('Layout.index')
@section('content')
    @if(\Illuminate\Support\Facades\Auth::guard('staff')->check())
        {{\Illuminate\Support\Facades\Auth::guard('staff')->user()}}
        @endif
    <section class="section section-top vh-100 set-as-background" data-bgimg="images/bg/7.jpg">
        <span class="abs-theme-bg"></span>
        <span class="abs-dots d-none d-md-flex"></span>
        <span class="abs-img set-as-background d-none d-md-flex" data-bgimg="images/vectors/2.png"></span>
        <span class="float-parallax floating-animate-model-3" data-img="images/float/circle.png"
              data-alt="UltrauniQ Floating Circle" data-top="10" data-left="35" data-distance="40" data-mouse="1"
              data-width="30"></span>
        <span class="float-parallax floating-animate-model-2" data-img="images/float/star.png"
              data-alt="UltrauniQ Floating Star" data-top="40" data-left="92" data-distance="100" data-mouse="1"
              data-width="30"></span>
        <span class="float-parallax floating-animate-model-1" data-img="images/float/triangle.png"
              data-alt="UltrauniQ Floating Triangle" data-top="80" data-left="50" data-distance="20" data-mouse="1"
              data-width="30"></span>
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-6">
                    <h1 class="mb-3 text-uppercase text-light foxy-animate" data-animate="fade-in-down"
                        data-duration="100">Great experiences build great brands</h1>
                    <p class="lead text-light foxy-animate" data-animate="fade-in-up" data-duration="200">Build a
                        website as impressive as your ultrauniq with this attractive and professionals.</p>
                    <a href="#" class="btn btn-lg btn-light rounded-0 mr-3 mt-4 foxy-animate"
                       data-animate="fade-in-left" data-duration="300">Learn More</a>
                    <a href="#" class="btn btn-lg btn-outline-light rounded-0 mt-4 foxy-animate"
                       data-animate="fade-in-right" data-duration="350">Get Started</a>
                </div>
            </div>
        </div>
    </section>


    <section class="section-bg-dark section-small-space">
        <span class="abs-dots-full-mild"></span>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center text-md-left">
                        <h3 class="text-white">Would you like to speak with our financial advisers?</h3>
                        <p class="m-0">Just speak with them and submit required documents. We will touch shortly.</p>
                    </div><!-- .col -->
                    <div class="col-md-4 text-center text-md-right align-self-center">
                        <a href="#" class="btn btn-outline-light mt-4 mt-md-0">Get a Quote</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>


    <section class="vector-featurebox-section">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <!-- Feature Box Vector -->
                        <div class="feature-box feature-box-vector mb-5 mb-lg-0 text-center before-bg-square after-bg-square">
                            <div class="feature-box-card">
                                <div class="feature-box-icon-wrap mb-3">
                                    <span class="feature-box-abs-img set-as-background" data-bgimg="images/vectors/abstract-vector-1.png"></span>
                                    <span class="feature-box-icon icon-lg text-white bg-none"><i class="fa fa-line-chart"></i></span>

                                </div>
                                <div class="feature-box-body">
                                    <div class="feature-box-title-wrap mb-4">
                                        <h4 class="feature-box-title">Marketing Analysis</h4>
                                    </div>
                                    <div class="feature-box-content-wrap">
                                        <p class="feature-box-content">Lorem ipsum was dolor sit amet, consectetur adipiscing elit, sed is eiusmod tempor incididunt</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .feature-box -->
                    </div><!-- .col -->
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box feature-box-vector mb-5 mb-lg-0 text-center before-bg-square after-bg-square">
                            <div class="feature-box-card">
                                <div class="feature-box-icon-wrap mb-3">
                                    <span class="feature-box-abs-img set-as-background" data-bgimg="images/vectors/abstract-vector-2.png"></span>
                                    <span class="feature-box-icon icon-lg text-white bg-none"><i class="fa fa-paper-plane"></i></span>

                                </div>
                                <div class="feature-box-body">
                                    <div class="feature-box-title-wrap mb-4">
                                        <h4 class="feature-box-title">Website Optimization</h4>
                                    </div>
                                    <div class="feature-box-content-wrap">
                                        <p class="feature-box-content">Lorem ipsum was dolor sit amet, consectetur adipiscing elit, sed is eiusmod tempor incididunt</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .feature-box -->
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="feature-box feature-box-vector text-center before-bg-square after-bg-square">
                            <div class="feature-box-card">
                                <div class="feature-box-icon-wrap mb-3">
                                    <span class="feature-box-abs-img set-as-background" data-bgimg="images/vectors/abstract-vector-3.png"></span>
                                    <span class="feature-box-icon icon-lg text-white bg-none"><i class="ti-email"></i></span>
                                </div>
                                <div class="feature-box-body">
                                    <div class="feature-box-title-wrap mb-4">
                                        <h4 class="feature-box-title">Email Marketing</h4>
                                    </div>
                                    <div class="feature-box-content-wrap">
                                        <p class="feature-box-content">Lorem ipsum was dolor sit amet, consectetur adipiscing elit, sed is eiusmod tempor incididunt</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .feature-box -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>

    <section class="classic-tab-section set-as-background background-fixed section-text-white" data-bgimg="images/bg/12.jpg">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 d-none d-md-flex text-center justify-content-center">
                        <div class="about-img-left mb-5 mb-lg-0">
                            <div class="abs-pos-middle"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video waves-icon"><span class="ti-control-play"></span></a></div>
                            <img class="img-fluid rounded" alt="Tab Image" src="images/others/tab-left.jpg" />
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-5 align-self-center text-center text-lg-left">
                        <div class="section-title-wrapper">
                            <h2 class="section-title text-uppercase text-white">ABOUT US</h2>
                            <span class="section-title-seperator seperator-white"></span>
                            <p class="lead p-0 text-white"><strong>We Create Digital Solutions, Products and Services.</strong></p>
                            <p class="about-content mb-0 text-white">Lorem ipsum was dolor sit amet, consectetur adipisicing elit. Vitae commodi, cum necessitatibus ea quia accusamus blanditiis dolore dolorem ad voluptate, distinctio adipisci! Tenetur iusto.</p>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>

    <section class="vector-featurebox-section">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="section-title-wrapper mb-3 text-center">
                            <h2 class="section-title text-uppercase">OUR WORKS</h2>
                            <span class="section-title-seperator"></span>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-filter-wrapper mb-5">
                                <ul class="nav portfolio-filter-list justify-content-center">
                                    <li><a href="#" class="portfolio-filter mr-3" data-filter="*">All</a></li>
                                    <li><a href="#" class="portfolio-filter mr-3" data-filter=".architecture">Construction</a></li>
                                    <li><a href="#" class="portfolio-filter mr-3" data-filter=".building">Medical</a></li>
                                    <li><a href="#" class="portfolio-filter mt-2 mt-md-0" data-filter=".workplace">Education</a></li>
                                </ul>
                            </div>

                            <div class="masonry-grid" data-gutter="30" data-col="3">
                                <div class="grid-item building">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-content text-center">
                                                <h5 class="portfolio-overlay-title md-3 text-light">Photography</h5>
                                                <ul class="nav overlay-icons justify-content-center">
                                                    <li><a href="images/agency/1.jpg" class="overlay-zoom"><span class="ti-zoom-in"></span></a></li>
                                                    <li><a href="portfolio-single.html" class="overlay-navigate"><span class="ti-link"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img src="images/agency/1.jpg" class="img-fluid" alt="Photography" />
                                    </div>
                                </div>
                                <div class="grid-item architecture">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-content text-center">
                                                <h5 class="portfolio-overlay-title md-3 text-light">Medical</h5>
                                                <ul class="nav overlay-icons justify-content-center">
                                                    <li><a href="images/agency/2.jpg" class="overlay-zoom"><span class="ti-zoom-in"></span></a></li>
                                                    <li><a href="portfolio-single.html" class="overlay-navigate"><span class="ti-link"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img src="images/agency/2.jpg" class="img-fluid" alt="Medical" />
                                    </div>
                                </div>
                                <div class="grid-item building">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-content text-center">
                                                <h5 class="portfolio-overlay-title md-3 text-light">News Papper</h5>
                                                <ul class="nav overlay-icons justify-content-center">
                                                    <li><a href="images/agency/3.jpg" class="overlay-zoom"><span class="ti-zoom-in"></span></a></li>
                                                    <li><a href="portfolio-single.html" class="overlay-navigate"><span class="ti-link"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img src="images/agency/3.jpg" class="img-fluid" alt="News Papper" />
                                    </div>
                                </div>
                                <div class="grid-item architecture">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-content text-center">
                                                <h5 class="portfolio-overlay-title md-3 text-light">Insurance</h5>
                                                <ul class="nav overlay-icons justify-content-center">
                                                    <li><a href="images/agency/4.jpg" class="overlay-zoom"><span class="ti-zoom-in"></span></a></li>
                                                    <li><a href="portfolio-single.html" class="overlay-navigate"><span class="ti-link"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img src="images/agency/4.jpg" class="img-fluid" alt="Insurance" />
                                    </div>
                                </div>
                                <div class="grid-item building workplace">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-content text-center">
                                                <h5 class="portfolio-overlay-title md-3 text-light">Education</h5>
                                                <ul class="nav overlay-icons justify-content-center">
                                                    <li><a href="images/agency/5.jpg" class="overlay-zoom"><span class="ti-zoom-in"></span></a></li>
                                                    <li><a href="portfolio-single.html" class="overlay-navigate"><span class="ti-link"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img src="images/agency/5.jpg" class="img-fluid" alt="Education" />
                                    </div>
                                </div>
                                <div class="grid-item architecture">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-content text-center">
                                                <h5 class="portfolio-overlay-title md-3 text-light">Private</h5>
                                                <ul class="nav overlay-icons justify-content-center">
                                                    <li><a href="images/agency/6.jpg" class="overlay-zoom"><span class="ti-zoom-in"></span></a></li>
                                                    <li><a href="portfolio-single.html" class="overlay-navigate"><span class="ti-link"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img src="images/agency/6.jpg" class="img-fluid" alt="Private" />
                                    </div>
                                </div>
                                <div class="grid-item building workplace">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-content text-center">
                                                <h5 class="portfolio-overlay-title md-3 text-light">Construction</h5>
                                                <ul class="nav overlay-icons justify-content-center">
                                                    <li><a href="images/agency/7.jpg" class="overlay-zoom"><span class="ti-zoom-in"></span></a></li>
                                                    <li><a href="portfolio-single.html" class="overlay-navigate"><span class="ti-link"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img src="images/agency/7.jpg" class="img-fluid" alt="Construction" />
                                    </div>
                                </div>
                                <div class="grid-item architecture">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-content text-center">
                                                <h5 class="portfolio-overlay-title md-3 text-light">Health Care</h5>
                                                <ul class="nav overlay-icons justify-content-center">
                                                    <li><a href="images/agency/8.jpg" class="overlay-zoom"><span class="ti-zoom-in"></span></a></li>
                                                    <li><a href="portfolio-single.html" class="overlay-navigate"><span class="ti-link"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img src="images/agency/8.jpg" class="img-fluid" alt="Health Care" />
                                    </div>
                                </div>
                                <div class="grid-item workplace building mb-0">
                                    <div class="portfolio-inner">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-content text-center">
                                                <h5 class="portfolio-overlay-title md-3 text-light">Real Estate</h5>
                                                <ul class="nav overlay-icons justify-content-center">
                                                    <li><a href="images/agency/9.jpg" class="overlay-zoom"><span class="ti-zoom-in"></span></a></li>
                                                    <li><a href="portfolio-single.html" class="overlay-navigate"><span class="ti-link"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img src="images/agency/9.jpg" class="img-fluid" alt="Real Estate" />
                                    </div>
                                </div>
                            </div><!-- .masonry-grid -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .section-inner -->
    </section>

    <section class="counter-section set-as-background background-fixed section-text-whilte" data-bgimg="images/bg/8.jpg">
        <span class="abs-theme-bg"></span>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-wrapper mb-5 mb-lg-0 text-center">
                            <div class="counter-icon mb-3">
                                <span class="ti-heart"></span>
                            </div>
                            <span class="counter-value mb-3" data-counter="179">179</span>
                            <h4 class="counter-text text-white">Work Spaces</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-wrapper mb-5 mb-lg-0 text-center">
                            <div class="counter-icon mb-3">
                                <span class="ti-home"></span>
                            </div>
                            <span class="counter-value mb-3" data-counter="678">678</span>
                            <h4 class="counter-text text-white">Homes</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-wrapper mb-5 mb-md-0 text-center">
                            <div class="counter-icon mb-3">
                                <span class="ti-shield"></span>
                            </div>
                            <span class="counter-value mb-3" data-counter="456">456</span>
                            <h4 class="counter-text text-white">Offices</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-wrapper text-center">
                            <div class="counter-icon mb-3">
                                <span class="ti-crown"></span>
                            </div>
                            <span class="counter-value mb-3" data-counter="123">123</span>
                            <h4 class="counter-text text-white">Apratments</h4>
                        </div>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>

    <section class="classic-tab-section section-bg-whilte">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 align-self-center mb-5 mb-lg-0">
                        <div class="section-title-wrapper">
                            <h2 class="section-title text-uppercase">Who We Are</h2>
                            <span class="section-title-seperator"></span>
                            <p class="lead p-0"><strong>We Create Digital Solutions, Products and Services.</strong></p>
                            <div class="about-content d-flex ml-4 ml-md-0 mt-4">
                                <span class="ti-check arrow-icon"></span>
                                <p class="ml-4">Lorem ipsum was dolor sit amet, consectetur adipisicing elit. Vitae commodi, cum necessitatibus ea quia accusamus blanditiis dolore. </p>
                            </div>
                            <div class="about-content d-flex ml-4 ml-md-0">
                                <span class="ti-check arrow-icon"></span>
                                <p class="ml-4">Lorem ipsum was dolor sit amet, consectetur adipisicing elit. Vitae commodi, cum necessitatibus ea quia accusamus blanditiis dolore. </p>
                            </div>
                            <div class="about-content d-flex ml-4 ml-md-0">
                                <span class="ti-check arrow-icon"></span>
                                <p class="ml-4 mb-0">Lorem ipsum was dolor sit amet, consectetur adipisicing elit. Vitae commodi, cum necessitatibus ea quia accusamus blanditiis dolore. </p>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-7 d-none d-md-flex justify-content-lg-end justify-content-center align-self-center text-center">
                        <div class="about-img-right">
                            <div class="abs-pos-middle"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video waves-icon"><span class="ti-control-play"></span></a></div>
                            <img class="img-fluid rounded" alt="Tab Image" src="images/others/tab-right.jpg" />
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>

    <section class="section-bg-dark section-small-space">
        <span class="abs-dots-full-mild"></span>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center text-md-left">
                        <h3 class="text-white">Would you like to speak with our financial advisers?</h3>
                        <p class="m-0">Just speak with them and submit required documents. We will touch shortly.</p>
                    </div><!-- .col -->
                    <div class="col-md-4 text-center text-md-right align-self-center">
                        <a href="#" class="btn btn-outline-light mt-4 mt-md-0">Get a Quote</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>

    <section id="blog-section" class="blog-section section-bg-white">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="section-title-wrapper mb-5 text-center">
                            <h2 class="section-title text-uppercase">Our Blog</h2>
                            <span class="section-title-seperator"></span>
                            <p class="lead text-muted">We are #1 builders in our country. Our customers satisfication is our strength.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-5 mb-lg-0 material-light-shadow rounded">
                            <div class="post-image-with-overlay">
                                <figure class="post-image-wrapper">
                                    <a href="blog-single.html"><img src="images/post/1.jpg" class="img-fluid rounded" alt="Post Image"/></a>
                                </figure>
                                <div class="post-overlay-wrap">
                                    <div class="blog-title">
                                        <h5 class="post-title"><a href="blog-single.html">How to install Zend optimizer on Windows</a></h5>
                                    </div>
                                </div>
                                <div class="date-overlay-wrap">
                                    <span class="overlay-date">04</span>
                                    <span class="overlay-month">Sep</span>
                                </div>
                            </div>
                            <div class="post-info-wrap">
                                <ul class="nav post-top-meta mb-3">
                                    <li class="post-author"><span class="ti-user mr-1 theme-color"></span><a href="#" class="text-muted">John Reacher</a></li>
                                    <li class="post-comment"><span class="ti-comment mr-1 theme-color"></span><a href="#" class="text-muted">4</a></li>
                                </ul>
                                <div class="post-excerpt mb-4">
                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table
                                </div>
                                <ul class="nav post-bottom-meta">
                                    <li class="post-read-more"><a class="btn btn-primary" href="blog-single.html">Read More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-5 mb-lg-0 material-light-shadow rounded">
                            <div class="post-image-with-overlay">
                                <figure class="post-image-wrapper">
                                    <a href="blog-single.html"><img src="images/post/2.jpg" class="img-fluid rounded" alt="Post Image"/></a>
                                </figure>
                                <div class="post-overlay-wrap">
                                    <div class="blog-title">
                                        <h5 class="post-title"><a href="blog-single.html">How to install Zend optimizer on Windows</a></h5>
                                    </div>
                                </div>
                                <div class="date-overlay-wrap">
                                    <span class="overlay-date">06</span>
                                    <span class="overlay-month">Sep</span>
                                </div>
                            </div>
                            <div class="post-info-wrap">
                                <ul class="nav post-top-meta mb-3">
                                    <li class="post-author"><span class="ti-user mr-1 theme-color"></span><a href="#" class="text-muted">John Reacher</a></li>
                                    <li class="post-comment"><span class="ti-comment mr-1 theme-color"></span><a href="#" class="text-muted">4</a></li>
                                </ul>
                                <div class="post-excerpt mb-4">
                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table
                                </div>
                                <ul class="nav post-bottom-meta">
                                    <li class="post-read-more"><a class="btn btn-primary" href="blog-single.html">Read More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="blog-wrapper material-light-shadow rounded">
                            <div class="post-image-with-overlay">
                                <figure class="post-image-wrapper">
                                    <a href="blog-single.html"><img src="images/post/3.jpg" class="img-fluid rounded" alt="Post Image"/></a>
                                </figure>
                                <div class="post-overlay-wrap">
                                    <div class="blog-title">
                                        <h5 class="post-title"><a href="blog-single.html">How to install Zend optimizer on Windows</a></h5>
                                    </div>
                                </div>
                                <div class="date-overlay-wrap">
                                    <span class="overlay-date">08</span>
                                    <span class="overlay-month">Sep</span>
                                </div>
                            </div>
                            <div class="post-info-wrap">
                                <ul class="nav post-top-meta mb-3">
                                    <li class="post-author"><span class="ti-user mr-1 theme-color"></span><a href="#" class="text-muted">John Reacher</a></li>
                                    <li class="post-comment"><span class="ti-comment mr-1 theme-color"></span><a href="#" class="text-muted">4</a></li>
                                </ul>
                                <div class="post-excerpt mb-4">
                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table
                                </div>
                                <ul class="nav post-bottom-meta">
                                    <li class="post-read-more"><a class="btn btn-primary" href="blog-single.html">Read More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- container -->
        </div><!-- .section-inner -->
    </section>

    <section class="client-section section-medium-space set-as-parallax" data-bgimg="images/bg/7.jpg" data-speed="0.2">
        <span class="abs-theme-bg"></span>
        <span class="abs-dots-full-mild"></span>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="d-none">Clients</h2>
                        <div class="slider-wrapper">
                            <div class="owl-carousel slide-style-classic client-slider controls-white" data-loop="1" data-nav="0" data-dots="0" data-items="5" data-tab="3" data-mobile="1" data-margin="0">
                                <div class="item">
                                    <a href="#"><img src="images/clients/1.png" class="img-fluid client-img" alt="Client 1" /></a>
                                </div><!-- .item -->
                                <div class="item">
                                    <a href="#"><img src="images/clients/2.png" class="img-fluid client-img" alt="Client 2" /></a>
                                </div><!-- .item -->
                                <div class="item">
                                    <a href="#"><img src="images/clients/3.png" class="img-fluid client-img" alt="Client 3" /></a>
                                </div><!-- .item -->
                                <div class="item">
                                    <a href="#"><img src="images/clients/4.png" class="img-fluid client-img" alt="Client 4" /></a>
                                </div><!-- .item -->
                                <div class="item">
                                    <a href="#"><img src="images/clients/5.png" class="img-fluid client-img" alt="Client 5" /></a>
                                </div><!-- .item -->
                                <div class="item">
                                    <a href="#"><img src="images/clients/6.png" class="img-fluid client-img" alt="Client 6" /></a>
                                </div><!-- .item -->
                            </div>
                        </div><!-- .slider-wrapper -->
                    </div><!-- .col -->
                </div>
            </div>
        </div>
    </section>

    <section id="contact-section" class="contact-section section-bg-white">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="section-title-wrapper mb-5 text-center">
                            <h2 class="section-title text-uppercase">Contact Us</h2>
                            <span class="section-title-seperator"></span>
                            <p class="lead text-muted">We are #1 builders in our country. Our customers satisfication is our strength.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-self-center mb-5 mb-md-0">
                    <div class="col-md-4">
                        <div class="contact-info-part-wrap mb-5">
                            <div class="contact-info-wrap py-4 rounded">
                                <div class="contact-form-icon text-center mb-3">
                                    <span class="ti-location-pin contact-icon-grid"></span>
                                </div>
                                <div class="contact-form-detail text-center">
                                    <h4 class="contact-info-phone text-white">Address</h4>
                                    <p class="mb-0">Maount View, Oval Road</p>
                                    <p class="mb-0">New York, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info-part-wrap mb-5">
                            <div class="contact-info-wrap py-4 rounded">
                                <div class="contact-form-icon text-center mb-3">
                                    <span class="ti-email contact-icon-grid"></span>
                                </div>
                                <div class="contact-form-detail text-center">
                                    <h4 class="contact-info-phone text-white">Email</h4>
                                    <p class="mb-0">support@email.com</p>
                                    <p class="mb-0">wptd@support.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info-part-wrap mb-0 mb-md-5">
                            <div class="contact-info-wrap py-4 rounded">
                                <div class="contact-form-icon text-center mb-3">
                                    <span class="ti-mobile contact-icon-grid"></span>
                                </div>
                                <div class="contact-form-detail text-center">
                                    <h4 class="contact-info-phone text-white">Phone</h4>
                                    <p class="mb-0">+91 12345 67890</p>
                                    <p class="mb-0">+93 12345 67890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="contact-form-wrapper">
                            <form class="contact-form bv-form" action="inc/function.php">
                                <p class="contact-status-msg d-none"></p>
                                <div class="contact-form-set d-flex">
                                    <div class="form-group mb-5 w-50">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" data-bv-field="name">
                                        </div>
                                    </div>
                                    <div class="form-group mb-5 w-50">
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" data-bv-field="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <div class="input-group">
                                        <textarea rows="4" class="form-control" name="message" placeholder="Message" data-bv-field="message"></textarea>
                                    </div>
                                </div>
                                <div class="form-submit-wrap text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div><!-- .contact-form-wrapper -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0 overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="d-none">Map</h2>
                    <div class="ultrauniq-gmap" data-map-style="Silver"></div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <section class="section section-small-space">
        <span class="abs-theme-bg"></span>
        <span class="abs-dots-full-mild"></span>
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center text-center text-md-left">
                    <div class="col-md-10">
                        <h4 class="m-0 text-white">Just speak with them and submit required documents. We will touch shortly.</h4>
                    </div><!-- .col -->
                    <div class="col-md-2">
                        <a href="#" class="btn btn-outline-light mt-4 mt-md-0">Contact us</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>



@endsection
