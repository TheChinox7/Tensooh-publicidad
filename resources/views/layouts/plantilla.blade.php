<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- ? Preloader Start-->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text ">
                    <img src="{{ asset('img/logo/logo1.png') }}" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">

                <div class="header-bottom  header-sticky">
                    <div class="container-fluid ">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 m-0 p-0 fondologo">
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img src="{{ asset('img/logo/logopubli.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 justify-content-end bg-white m-0 navi">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">

                                                <li><a href="{{ route('home') }}"></a></li>
                                                <li><a href="{{ route('home') }}">Inicio</a></li>
                                                <li><a href="{{ route('about') }}">Sobre Nosotros</a></li>
                                                <li><a href="#">Trabajos <span
                                                            class="badge badge-danger">pronto</span></a></li>
                                                <li><a href="{{ route('contact') }}">Contacto</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-30">
                                        <a href="https://wa.me/message/22BUM4VZA7HOO1"
                                            class="btn header-btn">Whatsapp</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    @yield('content')








    <footer>
        <section class="clients">
            <div class="">
                <div class="brand-title p-5 ">
                    <center><span>Algunos de nuestros clientes</span></center>
                </div>
                <center>
                    <div class="brand-area mt-0">
                        <div class="">
                            <div class="brand-active mb-0">
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/1.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/2.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/3.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/4.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/5.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/6.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/7.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/8.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/9.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/10.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/11.jpg') }}" alt="">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('img/parnners/12.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Brand Area Start -->
                    </div>
                </center>
                <!-- Brand Area End -->
            </div>
        </section>

        <!--? Footer Start-->
        <div class="footer-area section-bg">

            <div class="container">

                <div class="footer-top footer-padding">

                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="{{ route('home') }}"><img src="{{ asset('img/logo/logo.png') }}"
                                            style="width: 75%;" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit.</p>
                                    </div>
                                </div>
                                <div class="footer-number">
                                    <h4><span>+593 </span>0985256355</h4>
                                    <p>prueba@prueba.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Enlaces Rapidos</h4>
                                    <ul>
                                        <li><a href="{{ route('home') }}">Inicio</a></li>
                                        <li><a href="{{ route('about') }}">Sobre Nosotros</a></li>
                                        <li><a href="{{ route('contact') }}">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Enlaces Rapidos</h4>
                                    <ul>
                                        <li><a href="{{ route('home') }}">Inicio</a></li>
                                        <li><a href="{{ route('about') }}">Sobre Nosotros</a></li>
                                        <li><a href="{{ route('contact') }}">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> Todos los derechos reservados | Tensooh Media | Desarrollado Por <a
                                        href="https://colorlib.com" target="_blank">JinoxWeb</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <div id="instagram">
        <a href="#"> <img src="{{ asset('img/elements/instagram.png') }}" style="width: 100%;" alt=""></a>
    </div>
    <div id="whatsapp">
        <a href="#"> <img src="{{ asset('img/elements/whatsapp1.png') }}" style="width: 100%;" alt=""></a>
    </div>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->


    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('js/animated.headline.js') }}"></script>

    <!-- Date Picker -->
    <!-- Nice-select, sticky -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- Progress -->

    <!-- contact js -->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>






</body>

</html>
