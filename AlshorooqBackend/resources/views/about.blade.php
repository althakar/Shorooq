@extends('layout.app')
@section('content')
<style>
  .h-500{
    height: 500px !important;
  }
  .h-500 img{
    object-fit: cover;
  }
</style>
<main id="main">

  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{route('home')}}">Home</a></li>
        <li>About Us</li>
      </ol>
      <h2>About Us</h2>

    </div>
  </section>
  
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item h-500 active">
                  <img src="assets/img/AlshorooqMain.jpg" class="img-fluid" alt="">
                </div>

                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq1.jpg" class="img-fluid" alt="">
                </div>

                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq2.jpg" class="img-fluid" alt="">
                </div>

                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq3.jpeg" class="img-fluid" alt="">
                </div>
                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq4.jpeg" class="img-fluid" alt="">
                </div>
                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq5.jpeg" class="img-fluid" alt="">
                </div>
                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq6.jpeg" class="img-fluid" alt="">
                </div>
                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq7.jpeg" class="img-fluid" alt="">
                </div>
                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq8.jpeg" class="img-fluid" alt="">
                </div>
                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq9.jpeg" class="img-fluid" alt="">
                </div>
                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq10.jpeg" class="img-fluid" alt="">
                </div>
                <div class="carousel-item h-500">
                  <img src="assets/img/Alshorooq11.jpeg" class="img-fluid" alt="">
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            </div>
          <!-- <img src="assets/img/AlshorooqMain.jpg" class="img-fluid" alt=""> -->
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
          <h3>WE ARE AL SHOROOQ OASIS GENERAL TRADING LLC</h3>
          <p class="fst-italic">
            A leading food distribution company in the Middle East, Africa, and Asia
          </p>
          <p>
            As a one-stop-destination for import and distribution of food and beverages, we facilitate the acquisition and supply of a wide range of the most well-known FMCG brands in the industry, such as Red Bull, Mars, Coca Cola, and more.
          </p>
          <p>
            From our inception in 2009, we have grown into one of the most successful food distribution companies in the UAE. We are uncompromising in our pursuit of market leadership, and our investments in Product Quality, Service, Logistics and Distribution enable at to focus on procuring and distributing only the best FMCG products across the globe.
          </p>
        </div>
      </div>

    </div>
  </section>
  
</main>
@endsection