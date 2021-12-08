@extends('layouts.plantilla')

@section('title', 'Contacto - Tensooh Media')

@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-15 text-center">
                            <h2>Contáctanos</h2>
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


            <div class="row">
                <div class="col-12">
                    <h1 class="contact-title"> <strong> Dejanos tus datos, </strong> y te contactamos.</h1>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{route('mensaje')}}" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'"
                                        placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="telephone" id="telephone" type="text"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Teléfono'" placeholder="Teléfono" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Email'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="empresa" id="empresa" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Empresa'"
                                        placeholder="Empresa" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Comentarios..'"
                                        placeholder=" Comentarios.. "></textarea>
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
                            <p>Rosemead, CA 91770 <br> <a class="text-danger" href="https://goo.gl/maps/f8uScFWn5J3CLjZL9" target="_blank">ver en mapa <i class="fas fa-external-link-alt"></i></a></p>
                            <p> </p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-headphone-alt"></i></span>
                        <div class="media-body">
                            <h3><i class="fas fa-phone-volume"></i> (06) 2313021</h3> <br>
                            <h3><i class="fas fa-mobile-alt"></i> 0985453983</h3>
                            <p>Lunes-Viernes: 8:30am a 3pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>info@tensooh.com</h3>
                            <p>Disponible a cualquier hora!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

@endsection
