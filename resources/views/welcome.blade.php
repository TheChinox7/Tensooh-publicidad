@extends('layouts.plantilla')

@section('title', 'Inicio - Tensooh Media')

@section('content')


    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container align-items-center">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="hero__caption align-items-center">
                                    <div class="animated">
                                        <center></center>
                                        <center>
                                            <MARQUEE DIRECTION=LEFT SCROLLAMOUNT=15> <h1>PUBLICIDAD OUT OF HOME</h1> </MARQUEE>
                                        </center>
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
        <section class="about-low-area section-padding2 d-none" id="about1">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle ">
                                <h3>Somos</h3>
                                <h2>Tensooh</h2>
                                <span>somos más que una empresa, somos una familia.!</span>
                                <h4>Durante 15 años hemos realizado grandes proyectos de la mano de nuestros clientes, a
                                    quienes agradecemos su confianza y compañía durante todo este tiempo.
                                    <br> <br>
                                    Estamos comprometidos con la realización de trabajos con los más altos estándares de
                                    calidad en la publicidad OOH, caracterizándonos por ser una empresa sólida y con
                                    experiencia en el mercado nacional.
                                    <br> <br>
                                    Creamos nuestras propias estructuras con un equipo de creativos diseñadores,
                                    departamento de logística, impresión y metal mecánica.
                                </h4>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc.</p> -->
                            </div>
                        </div>
                        <div class="about-caption mb-0">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-45">
                                <img src="{{asset('img/hero/copia2.jpg')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->

        <section class="service-area">
            <div class="imgservicefab">
                <img class="img1"  src="{{asset('img/hero/struc.jpg')}}" alt="">

                <img class="img2" src="{{asset('img/hero/strucv.jpg')}}" alt="">

            </div>

        </section>

        <!--? service Area Start -->
        <section class="service-area">
            <div class="imgservice">
                <img class="img1"  src="{{asset('img/hero/hero3.jpg')}}" alt="">

                <img class="img2" src="{{asset('img/hero/hero3v.jpg')}}" alt="">

            </div>

        </section>
        <!-- service Area End -->
    </main>
@endsection
