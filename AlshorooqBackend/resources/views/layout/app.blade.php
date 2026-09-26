<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AL SHOROOQ OASIS GENERAL TRADING LLC DUBAI</title>
    <meta content="AL SHOROOQ OASIS GENERAL TRADING LLC DUBAI is a leading importer and distributor of major food and beverages, confectioneries, groceries, household products, beers, spirits, cigarettes, tobacco, health and skincare products in Dubai. We deal with brands like Red Bull, Pepsi, Nestle, Hershey's, Heineken etc." name="description">
    <meta content="keywords" name="shopping,online shopping,beverages,groceries,household products, beers, spirits, cigarettes, tobacco, health and skincare products">

    <link href="assets/img/fav.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:alshorooqoasis@gmail.com">alshorooqoasis@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+971 4 251 8401</span></i>
            </div>
        </div>
    </section>

    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <a href="{{ route('home') }}"><img src="assets/img/logo-removebg-preview-croped.png"
                        alt="AL SHOROOQ OASIS GENERAL TRADING LLC DUBAI" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="{{ $pageName == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li><a class="{{ $pageName == 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                    <li><a class="{{ $pageName == 'contact' ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    @yield('content')

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="assets/ASO_CATALOGUE.pdf" download="ASO_CATALOGUE">PRODUCT CATALOGUE</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Product Categories</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> BEVERAGES DISTRIBUTOR</li>
                            <li><i class="bx bx-chevron-right"></i> CONFECTIONERIES SUPPLIER</li>
                            <li><i class="bx bx-chevron-right"></i> GROCERIES IMPORTER</li>
                            <li><i class="bx bx-chevron-right"></i> HEALTH & BEAUTY PRODUCTS IMPORTER</li>
                            <li><i class="bx bx-chevron-right"></i> HOUSEHOLD PRODUCTS DISTRIBUTOR</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            SHOP NO. G-12 AL SHEIKH BUTTI BUILDING NEAR AL JAZEERA HOTEL, <br>AL RAS DEIRA
                            DUBAI <br>UNITED ARAB EMIRATES<br>
                            <!-- OBAID GHANIM ABDUL RAHMAN AL MUTAIWIE BUILDING <br>
                            OFFICE F04, 1ST FLOOR, NEAR AL RAS HOTEL <br>
                            AL RAS, DEIRA, P. O BOX NO. 34529 DUBAI <br>
                            UNITED ARAB EMIRATES <br> -->
                            <strong>Mobile 1:</strong> +971 55 690 4609<br>
                            <strong>Mobile 2:</strong> +971 50 675 2443<br>
                            <strong>Telephone:</strong> +971 4 251 8401<br>
                            <strong>Email:</strong> alshorooqoasis@gmail.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About AL SHOROOQ OASIS</h3>
                        <p>WE ARE AL SHOROOQ OASIS GENERAL TRADING LLC</p>
                        <p>A leading food distribution company in the Middle East, Africa, and Asia</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>AL SHOROOQ OASIS GENERAL TRADING LLC</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>
    <a target="_blank" href="https://api.whatsapp.com/send?phone=971556904609" class="whatsapp-chat d-flex align-items-center justify-content-center">
        <img src="assets/img/whatsapp.png" alt=""></a>

    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>
