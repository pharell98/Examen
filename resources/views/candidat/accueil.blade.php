@extends('layouts.app1')
@section('contenu')
    {{-- START CONTENT --}}
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(front/images/slider2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Un apprentissage qui vous ressemble</h1>
                            <h2 class="subheading mb-4">Apprenez à apprendre, découvrez les compétences de demain, et prenez
                                votre carrière en main.</h2>
                            <p><a href="#" class="btn btn-primary">View Details</a></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url(back/img/sc4.jpeg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Un apprentissage qui vous ressemble</h1>
                            <h2 class="subheading mb-4">Apprenez à apprendre, découvrez les compétences de demain, et prenez
                                votre carrière en main.</h2>
                            <p><a href="#" class="btn btn-primary">View Details</a></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url(front/images/slider1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">Votre avenir commence ici</h1>
                            <h2 class="subheading mb-4">100% Apprendre à coder &amp; avec notre site</h2>
                            <p><a href="#" class="btn btn-primary">View Details</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Mentorat</h3>
                            <span> Chaque semaine, un expert du métier visé suit vos progrès</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Embauché ou remboursé</h3>
                            <span>Vous trouvez un emploi sous 6 mois ou nous remboursons vos frais de scolarité*</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-category ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 order-md-last align-items-stretch d-flex">
                            <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
                                style="background-image: url(front/images/diploma1.svg);">
                                <div class="text text-center">
                                    <h2>Nos Formations</h2>
                                    <p>Apprenez à apprendre, découvrez les compétences de demain, et prenez votre carrière
                                        en main.</p>
                                    <p><a href="{{ URL::to('inscrire') }}" class="btn btn-primary">S'inscrire</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                                style="background-image: url(front/images/initiation2.jpg);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Web</a></h2>
                                </div>
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end"
                                style="background-image: url(front/images/initiation3.jpg);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Métier</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url(front/images/initiation1.png);">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">Informatique</a></h2>
                        </div>
                    </div>
                    <div class="category-wrap ftco-animate img d-flex align-items-end"
                        style="background-image: url(front/images/initiation4.jpg);">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">Initiation</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Formations populaires</span>
                    <h2 class="mb-4">Nos formations</h2>
                    <p>Formez-vous pour un avenir meilleur</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($formations as $f)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{ URL::to('connecter') }}" class="img-prod"><img class="img-fluid"
                                    src="/storage/formation_images/{{ $f->form_image }}" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="{{ URL::to('connecter') }}">{{ $f->libelle }}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="">{{ $f->dure }} mois</span></p>
                                        <p class="price"><span class="">Début: {{ $f->date }}</span></p>
                                    </div>
                                </div>
                                <div class="btn btn-info text ">
                                    <a href="{{ URL::to('connecter') }}"
                                        class="text text-dark font-weight-bold">Integer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section img" style="background-image: url(front/images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                    <span class="subheading">Best Price For You</span>
                    <h2 class="mb-4">Deal of the day</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    <h3><a href="#">Spinach</a></h3>
                    <span class="price">$10 <a href="#">now $5 only</a></span>
                    <div id="timer" class="d-flex mt-5">
                        <div class="time" id="days"></div>
                        <div class="time pl-3" id="hours"></div>
                        <div class="time pl-3" id="minutes"></div>
                        <div class="time pl-3" id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Our satisfied customer says</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(front/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(front/images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(front/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(front/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="ftco-section ftco-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="front/images/partner-1.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="front/images/partner-2.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="front/images/partner-3.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="front/images/partner-4.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="front/images/partner-5.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
            </div>
        </div>
    </section>
    {{-- END CONTENT --}}
@endsection
