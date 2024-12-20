<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Rixos - Luxury Hotel Template</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Gilda+Display&amp;family=Urbanist:wght@300;400;500;600&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="centered">
            <div class="cont">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div> <img src="img/preloader.png" alt="">
            </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    @include('header')
    <!-- Header Banner -->
    <section class="banner-header bg-img bg-fixed" data-overlay-dark="5" data-background="img/banner/18.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="subtitle">Luxury Resort Hotel</div>
                    <div class="title">Image Gallery</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Image -->
    <section id="gallery" data-scroll-index="4" class="section-padding bg-lightbrown">
        <div class="container">
            <div class="row galleryscroll" data-masonry='{"percentPosition": true }'>
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="item">
                        <a href="img/gallery/01.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="img"> <img src="img/gallery/01.jpg" class="img-fluid mx-auto d-block"
                                    alt=""> </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-25">
                    <div class="item">
                        <a href="img/gallery/02.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="img"> <img src="img/gallery/02.jpg" class="img-fluid mx-auto d-block"
                                    alt=""> </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="item">
                        <a href="img/gallery/03.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="img"> <img src="img/gallery/03.jpg" class="img-fluid mx-auto d-block"
                                    alt=""> </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="item">
                        <a href="img/gallery/04.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="img"> <img src="img/gallery/04.jpg" class="img-fluid mx-auto d-block"
                                    alt=""> </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-25">
                    <div class="item">
                        <a href="img/gallery/05.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="img"> <img src="img/gallery/05.jpg" class="img-fluid mx-auto d-block"
                                    alt=""> </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25">
                    <div class="item">
                        <a href="img/gallery/06.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
                            <div class="img"> <img src="img/gallery/06.jpg" class="img-fluid mx-auto d-block"
                                    alt=""> </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    @include('footer')
    <!-- jQuery -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-migrate-3.4.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
