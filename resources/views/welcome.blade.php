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
                                        <center><img class="mb-80" src="{{ asset('img/logo/logopubli.png') }}"
                                                alt="logo tenshoo"></center>
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
        <section class="about-low-area section-padding2" id="about1">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-45">
                                <h3>Somos</h3>
                                <h2>Tensooh</h2>
                                <span>somos más que una empresa, somos una familia.!</span>
                                <h4>Durante 15 años hemos realizado grandes proyectos de la mano de nuestros clientes, a
                                    quienes agradesemos su confianza y compañia durante todo este tiempo.
                                    <br> <br>
                                    Estamos comprometidos con la realización de trabajos con los más altos estandares de
                                    calidad en la publicidad OOH, caracterizandonos por ser una empresa solida y con
                                    experiencia en el mercado nacional.
                                    <br> <br>
                                    Creamos nuestras propias estructuras con un equipo de creativos diseñadores,
                                    departamento de logistica, impresión y metal mecanica.
                                </h4>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,mod tempor incididunt ut labore et dolore magna aliqua. Utnixm, quis nostrud exercitation ullamc.</p> -->
                            </div>
                        </div>
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-45">
                                <img src="{{asset('img/hero/h1_hero.png')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->
        <!--? service Area Start -->
        <section class="service-area">
            <div class="p-0 ml-5">
                <div class="justify-content-between">
                    <div class="col-lg-6 col-md-9">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-50">
                            <h2 class="mb-35">Cobertura <br> Total <br> de Mercado</h2>
                        </div>
                    </div>
                    <div class="align-items-center">
                        <div class="animated">
                            <center><span>hola</span></center>
                            <center><h1>PUBLICIDAD OUT OF HOME</h1>
                            </center>
                        </div>

                    </div>

                </div>
                <!-- Brand Area Start -->
            </div>
            <!-- Brand Area End -->
            </div>
        </section>
        <!-- service Area End -->
    </main>
@endsection
