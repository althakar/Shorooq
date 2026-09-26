@extends('layout.app')
@section('content')
      <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <ol>
              <li><a href="{{route('home')}}">Home</a></li>
              <li>Contact</li>
            </ol>
            <h2>Contact</h2>
    
          </div>
        </section>
        <section id="contact" class="contact">
          <div class="container">
    
            <div class="row">
              <div class="col-lg-6">
                <div class="info-box mb-4">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>SHOP NO. G-12 AL SHEIKH BUTTI BUILDING NEAR AL JAZEERA HOTEL  <br>
                  AL RAS DEIRA DUBAI - UNITED ARAB EMIRATES
             </p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p><a href="mailto:alshorooqoasis@gmail.com">alshorooqoasis@gmail.com</a></p>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p><strong>Mobile 1:</strong> +971 55 690 4609<br>
                    <strong>Mobile 2:</strong> +971 50 675 2443<br>
                    <strong>Telephone:</strong> +971 4 251 8401<br></p>
                </div>
              </div>
    
            </div>
    
            <div class="row">
    
              <div class="col-lg-12 ">
                <div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3608.029959453017!2d55.2934291!3d25.2695776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda547354b5616d9c!2zMjXCsDE2JzEwLjUiTiA1NcKwMTcnNDQuMiJF!5e0!3m2!1sen!2s!4v1665599967298!5m2!1sen!2s"  width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
                <!-- <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=25.2676104,55.2948863&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://kokagames.com/">Koka Games</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div> -->
              </div>
  
    
            </div>
    
          </div>
        </section>
    
      </main>
@endsection