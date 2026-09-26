@extends('layout.app')
@section('content')

    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background: url(assets/img/mars-chocolates.jpg);background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    ">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">SATISFYING <span>HUNGER PANGS</span> ALL
                                    ACROSS THE MIDDLE EAST AND ASIA</h2>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background: url(assets/img/red-bull.png);background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    ">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">ONE OF THE <span>BIGGEST RED BULL
                                        SUPPLIERS</span> IN THE MIDDLE EAST</span></h2>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background: url(assets/img/nutella.jpg);background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    ">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">A <span>LEADING IMPORTER/EXPORTER</span>
                                    OF NUTELLA IN DUBAI</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>

    <main id="main">

        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title">
                    <h2>We Trade In</h2>
                </div>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/coca-cola.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/ferrero.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/hersheys.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/kelloggs.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/kraft.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/lotus.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/mars-foods.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/mondelez.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/monster-energy.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/nestle.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/pepsi.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/p-n-g.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/red-bull.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/unilever.jpg" class="img-fluid"
                                alt=""></div>
                    </div>
                 
                </div>

            </div>
        </section>


        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Product Categories</h2>
                </div>

                <div class="row trade-products">
                    <div class="col-lg-4">
                        <img src="assets/img/1-beverages.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>BEVERAGES DISTRIBUTOR</h3>
                        <p class="fst-italic">
                            We deal with some of the best names in the beverages world that comprise of Evian water, Monster
                            and RedBull energy drinks, Pepsi, Gatorade among others. Leveraging our wide network of
                            contacts, we are a sought after name in the wholesale import and distribution of food and
                            beverages in Dubai.
                        </p>
                    </div>
                </div>
                <div class="row trade-products">

                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>CONFECTIONERIES SUPPLIER</h3>
                        <p class="fst-italic">
                            We're a one-stop destination for import and distribution of some of the best quality chocolates
                            and confectioneries. Dealing with brands like Snickers, Hershey's, Toblerone, Galaxy, Lindt and
                            more, we source the best confectioneries from around the world to satisfy your sweet cravings.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <img src="assets/img/2-confectioneries.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row trade-products">
                    <div class="col-lg-4">
                        <img src="assets/img/3-groceries.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>GROCERIES IMPORTER</h3>
                        <p class="fst-italic">
                            When it comes to the import and distribution of groceries in Dubai, we're the best in the
                            business. Dealing with a diverse range of brands including Nestle, Kraft, Del Monte, Doritos,
                            Wrigley's etc. and their food products, we are able to provide the most competitive pricing and
                            the freshest stocks.
                        </p>
                    </div>
                    
                </div>
                <div class="row trade-products">

                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>HEALTH & BEAUTY PRODUCTS IMPORTER</h3>
                        <p class="fst-italic">
                            We offer an extensive assortment of the finest quality of health, beauty, skin care, baby care,
                            and body care brands like Dove, Lux, Nivea, Pampers, Vaseline etc. When it comes to the
                            wholesale import and distribution of health and beauty products in Dubai, we are second to none.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <img src="assets/img/4-health-beauty.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row trade-products">
                    <div class="col-lg-4">
                        <img src="assets/img/5-household.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>HOUSEHOLD PRODUCTS DISTRIBUTOR</h3>
                        <p class="fst-italic">
                            We are a prominent name among the wholesale importers and distributors of household products in
                            Dubai. Dealing with a wide array of brands and products that include Ariel, Domex, Unilever,
                            Tide, Fairy, Scott, etc., we have always raised the bar when it comes to acquiring, supplying,
                            and distributing household FMCG products.
                        </p>
                    </div>
                    
                </div>

            </div>
        </section>




    </main>
@endsection
