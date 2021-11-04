@extends('layouts.plantilla')

@section('title', 'Sobre Nosotros - Tensooh Media')

<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-15 text-center">
                            <h2>Contactanos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <section class="contact-section pt-5">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px; position: relative; overflow: hidden;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1677.260461668595!2d-77.81437417102276!3d-0.9921541003886567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d6a4360e7aa5e5%3A0x2ad329c7770ea747!2sMalec%C3%B3n%20Esc%C3%A9nico%20de%20Tena!5e0!3m2!1ses!2sus!4v1636011136485!5m2!1ses!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Enviar Un Mensaje</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{route('mensaje')}}" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa el mensaje'"
                                        placeholder=" Ingresa el mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su nombre'"
                                        placeholder="Ingrese su nombre">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese el asunto'"
                                        placeholder="Ingrese el asunto">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Tena, Napo - Ecuador</h3>
                            <p>Rosemead, CA 91770 <br> <a class="text-danger" href="https://goo.gl/maps/f8uScFWn5J3CLjZL9">ver en mapa <i class="fas fa-external-link-alt"></i></a></p>
                            <p> </p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+593 0985254158</h3>
                            <p>Lunes - Viernes : 9am a 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>ejemplo@ejemplo.com</h3>
                            <p>Disponible a cualquier hora!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>


@section('content')

@endsection
