@extends('layouts.plantilla')

@section('title', 'Inicio - Tensooh Media')

@section('content')


    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-6 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <MARQUEE DIRECTION=LEFT SCROLLAMOUNT=15> <h1>PUBLICIDAD OUT OF HOME</h1> </MARQUEE>
                                    <div class="animated">

                                    </div>
                                    <h2>
                                        <P class="text-justify" data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Impedit aliquam ab aliquid reiciendis natus pariatur.</P>
                                    </h2>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="#about1" class="btn hero-btn mb-10" data-animation="fadeInUp"
                                            data-delay=".8s">Explorar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About 1 Start-->
        <section class="about-low-area section-padding2" id="about1">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6 col-md-9">
                        <!-- about-img -->
                        <div class="about-img">
                            <img src="{{ asset('img/gallery/PAGINA TENSOOH 2-02.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span></span>
                                <h2>We listen and work together for Great experience.</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc.</p> -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore
                                et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc.</p>
                        </div>
                        <a href="{{ route('about') }}" class="btn">Sobre Nosotros</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->
        <!--? service Area Start -->
        <section class="service-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-9">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-50">
                            <h2 class="mb-35">Mission is to bring all the power of every business.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore
                                et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sunt nam est voluptatum magni quia nobis pariatur magnam
                                commodi dolor, quaerat, nemo ex natus consectetur. Repellat eveniet ullam labore libero
                                optio!</p>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="single-services mb-30 text-center">
                                    <i class="flaticon-null"></i>
                                    <p>Perfect in Coverage</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="single-services mb-30 text-center">
                                    <i class="flaticon-null-1"></i>
                                    <p>Live Call Support</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="single-services mb-30 text-center">
                                    <i class="flaticon-null-2"></i>
                                    <p>Secured Payment</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="single-services mb-30 text-center">
                                    <i class="flaticon-null-3"></i>
                                    <p>1 Gbps Data Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service Area End -->
        <!--? Pricing Card Start -->
        <section class="pricing-card-area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <p>Our pricing plan for you</p>
                            <h2>No hidden charges! choose your plan wisely.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <p>Single Package</p>
                                <h4>Only Broadband connection</h4>
                            </div>
                            <div class="card-mid">
                                <h4>$20.00 <span>/ mo</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Line Rental Included</li>
                                    <li>12 Month Contract</li>
                                    <li>No Activation Charges</li>
                                    <li>Up to 12Mbps average Speed</li>
                                    <li>Enjoy family on weekends</li>
                                </ul>
                                <a href="#" class="borders-btn">View Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <p>Half Package</p>
                                <h4>Broadband & TV connection</h4>
                            </div>
                            <div class="card-mid">
                                <h4>$25.00 <span>/ mo</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Line Rental Included</li>
                                    <li>12 Month Contract</li>
                                    <li>No Activation Charges</li>
                                    <li>Up to 12Mbps average Speed</li>
                                    <li>Enjoy family on weekends</li>
                                </ul>
                                <a href="#" class="borders-btn">View Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <p>Full Package</p>
                                <h4>TV, Broadband And Phone</h4>
                            </div>
                            <div class="card-mid">
                                <h4>$29.00 <span>/ mo</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Line Rental Included</li>
                                    <li>12 Month Contract</li>
                                    <li>No Activation Charges</li>
                                    <li>Up to 12Mbps average Speed</li>
                                    <li>Enjoy family on weekends</li>
                                </ul>
                                <a href="#" class="borders-btn">View Packages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Card End -->
        <!-- Latest Offers Start -->
        <div class="latest-wrapper">
            <div class="container">
                <div class="latest-area latest-height  section-bg2"
                    data-background="{{ asset('img/gallery/section_bg01.png') }}">
                    <div class="row  align-items-center justify-content-between">
                        <div class="col-xl-12 col-lg-12">
                            <div class="latest-caption">
                                <h2>Check our unbelievable super fast Broadband availability in your area.</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-10">
                        <div class="section-tittle text-center mb-90">
                            <h2>No hidden charges! choose your plan wisely.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ asset('img/gallery/home-blog1.png') }}" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">The purpose of lolght invera jgrlie.</a></h3>
                                    <p>January 22, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ asset('img/gallery/home-blog2.png') }}" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">The purpose of lolght invera jgrlie.</a></h3>
                                    <p>January 22, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ asset('img/gallery/home-blog3.png') }}" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">The purpose of lolght invera jgrlie.</a></h3>
                                    <p>January 22, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
@endsection
