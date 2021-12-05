@extends('layouts.plantilla')

@section('title', 'Sobre Nosotros - Tensooh Media')

@section('style')

    <link href="{{ asset('slick/slick.css') }}" rel='stylesheet' />
    <link href="{{ asset('galery/css/magnific-popup.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('galery/slick/slick-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('galery/css/templatemo-real-dynamic.css') }} " rel="stylesheet" />
@endsection


@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-15 text-center">
                                <h2>Nuestros Trabajos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <div class="tm-container bg-white">
            <div class="container-fluid">
                <div class="row tm-mb-1">
                    <div class="col-12 tm-page-cols-container">
                        <div class="tm-page-col-left">
                            <ul class="tabs clearfix filters-button-group">
                                <li>
                                    <a href="#" class="active tm-category-link" data-filter=".category-1">
                                        <div class="tm-thumbnails">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-01.jpg') }}" alt="Thumbnail"
                                                class="tm-thumbnail">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-02.jpg') }}" alt="Thumbnail"
                                                class="tm-thumbnail">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-03.jpg') }}" alt="Thumbnail"
                                                class="tm-thumbnail">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-04.jpg') }}" alt="Thumbnail"
                                                class="tm-thumbnail">
                                        </div>
                                        <span class="tm-category-label">Category One</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tm-category-link" data-filter=".category-2">
                                        <div class="tm-thumbnails">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-05.jpg') }}"
                                                alt="Thumbnail" class="tm-thumbnail">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-02.jpg') }}"
                                                alt="Thumbnail" class="tm-thumbnail">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-09.jpg') }}"
                                                alt="Thumbnail" class="tm-thumbnail">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-11.jpg') }}"
                                                alt="Thumbnail" class="tm-thumbnail">
                                        </div>
                                        <span class="tm-category-label">Second Category</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tm-category-link" data-filter=".category-3">
                                        <div class="tm-thumbnails">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-10.jpg') }}"
                                                alt="Thumbnail" class="tm-thumbnail">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-07.jpg') }}"
                                                alt="Thumbnail" class="tm-thumbnail">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-06.jpg') }}"
                                                alt="Thumbnail" class="tm-thumbnail">
                                            <img src="{{ asset('galery/img/gallery/gallery-item-04.jpg') }}"
                                                alt="Thumbnail" class="tm-thumbnail">
                                        </div>
                                        <span class="tm-category-label">Category Three</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tm-page-col-right">
                            <div class="tm-gallery" id="tmGallery">
                                <div class="tm-gallery-item category-1 category-3">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-01.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-01.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-1 category-2">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-02.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-02.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-1">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-03.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-03.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-1 category-3">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-04.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-04.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-1 category-2">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-05.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-05.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-1 category-3">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-06.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-06.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-1 category-3">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-07.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-07.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-1 category-3">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-08.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-08.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-1 category-2">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-09.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-09.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-2 category-3">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-10.jpg') }}" alt="Gallery item"
                                            class="galery/img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-10.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-2">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-11.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-11.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="tm-gallery-item category-2">
                                    <figure class="effect-bubba">
                                        <img src="{{ asset('galery/img/gallery/gallery-item-12.jpg') }}" alt="Gallery item"
                                            class="img-fluid" />
                                        <figcaption>
                                            <h2>Ver <span>Imagen</span></h2>
                                            <a href="{{ asset('galery/img/gallery/gallery-item-12.jpg') }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Brand Area Start -->


    </main>

@section('scrips')

    <script src="{{ asset('galery/js/parallax.min.js') }}"></script>
    <script src="{{ asset('galery/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('galery/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('galery/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('galery/slick/slick.min.js') }}"></script>
    <script src="{{ asset('galery/js/tooplate-script.js') }}"></script>


    <script>
        $(document).ready(function() {
            /* Isotope Gallery */
            var $gallery = $(".tm-gallery").isotope({
                itemSelector: ".tm-gallery-item",
                filter: '.category-1'
                // layoutMode: "fitRows"
            });
            // layout Isotope after each image loads
            $gallery.imagesLoaded().progress(function() {
                $gallery.isotope("layout");
            });

            $(".filters-button-group").on("click", "a", function() {
                var filterValue = $(this).attr("data-filter");
                $gallery.isotope({
                    filter: filterValue
                });
            });

            /* Categories */
            $(".tabgroup > div").hide();
            $(".tabgroup > div:first-of-type").show();
            $(".tabs a").click(function(e) {
                e.preventDefault();
                var $this = $(this),
                    tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
                    others = $this
                    .closest("li")
                    .siblings()
                    .children("a"),
                    target = $this.attr("href");
                others.removeClass("active");
                $this.addClass("active");

                // Scroll to tab content (for mobile)
                if ($(window).width() < 992) {
                    $("html, body").animate({
                            scrollTop: $("#tmGallery").offset().top
                        },
                        200
                    );
                }
            });

            // Magnific Pop up
            $('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            // Testimonials carousel
            $('.tm-carousel').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>

@endsection

@endsection
