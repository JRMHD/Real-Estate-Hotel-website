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
    <section class="banner-header bg-img bg-fixed" data-overlay-dark="5" data-background="img/banner/20.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subtitle">Rixos Luxury Hotel</div>
                    <div class="title">About Hotel</div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-15">
                    <div class="section-subtitle">About Rixos</div>
                    <div class="section-title">Laid-back places for kindred spirits</div>
                    <p>Welcome to the <b>best five-star resort hotel</b> in New York. The experience elementum sesue the
                        aucan vestibulum alesun usto in sapien rutrum volutan donec fermen.</p>
                    <p class="mb-40">Lorem ipsum quisque sodales miss in the varius drana miss turpis softtiton tellus
                        in the fermen.</p>
                    <a href="#" class="button-3 mb-15">Rooms & Suites</a>
                    <div class="phone"><a href="tel:+12345678910"><i class="fa-light fa-phone"></i>+1 234 567 8910</a>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 mb-20 mt-45"> <img class="rounded-2 animation-float1"
                        src="img/about01.jpg" alt=""> </div>
                <div class="col-lg-3 col-md-6 mb-20"> <img class="rounded-2 animation-float2" src="img/about02.jpg"
                        alt=""> </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding bg-lightbrown">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-20">
                    <div class="section-subtitle">Our Experts</div>
                    <div class="section-title">Meet The Team</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="img"> <img src="img/team/b.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Jesica Brown</a></h5>
                                <p>Front Office</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"> <img src="img/team/c.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Eleanor Arya</a></h5>
                                <p>Administrator</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="img/team/d.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Sophia Mia</a></h5>
                                <p>Receptionist</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"> <img src="img/team/e.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Jason Lucas</a></h5>
                                <p>Floor Clerk</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img"> <img src="img/team/f.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Dorothy Nancy</a></h5>
                                <p>Executive Assistant</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="img/team/a.jpg" alt="" class="img-cover">
                                <div class="social-icons">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </div>
                            </div>
                            <div class="info">
                                <h5><a href="team-single.html">Daniel Martin</a></h5>
                                <p>Hotel Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video -->
    <section class="video-wrapper section-padding bg-img" data-overlay-dark="4" data-background="img/banner/01.jpg">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 text-center rotatex">
                    <a href="https://youtu.be/hG7Ok0HvDcU" data-lity="video" class="rotate-box vid">
                        <div class="rotate-circle rotate-text">
                            <svg class="textcircle" viewBox="0 0 500 500">
                                <defs>
                                    <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                    </path>
                                </defs>
                                <text>
                                    <textPath xlink:href="#textcircle" textLength="900"> rixos luxury resort hotel
                                    </textPath>
                                </text>
                            </svg>
                        </div> <span class="icon"> <i class="fas fa-play"></i> </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- video text -->
        <div class="video-text">videos</div>
    </section>
    <!-- Amenities -->
    <section class="amenities section-padding bg-lightbrown">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="section-subtitle">Hotel Services</div>
                    <div class="section-title">Amenities</div>
                    <p class="mb-25">The experience elementum sesue in the aucantion alesun in sapien fermen miss
                        caleustion in the sapien.</p> <a href="amenities.html" class="button-3">All Amenities</a>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="item hover-box mb-25">
                                <div class="cont up">
                                    <div class="icon"> <i class="fa-thin fa-truck-plane"></i> </div>
                                    <div class="text">
                                        <h5>Pick Up & Drop</h5>
                                        <p>Lorem ipsum is simply dummy fermen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item hover-box mb-25">
                                <div class="cont up">
                                    <div class="icon"> <i class="fa-thin fa-circle-parking"></i> </div>
                                    <div class="text">
                                        <h5>Parking Space</h5>
                                        <p>Lorem ipsum is simply dummy fermen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item hover-box mb-25">
                                <div class="cont up">
                                    <div class="icon"> <i class="fa-thin fa-bed-front"></i> </div>
                                    <div class="text">
                                        <h5>Room Service</h5>
                                        <p>Lorem ipsum is simply dummy fermen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item hover-box mb-25">
                                <div class="cont up">
                                    <div class="icon"> <i class="fa-thin fa-water-ladder"></i> </div>
                                    <div class="text">
                                        <h5>Swimming Pool</h5>
                                        <p>Lorem ipsum is simply dummy fermen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item hover-box mb-25">
                                <div class="cont up">
                                    <div class="icon"> <i class="fa-thin fa-wifi"></i> </div>
                                    <div class="text">
                                        <h5>Fibre Internet</h5>
                                        <p>Lorem ipsum is simply dummy fermen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item hover-box mb-25">
                                <div class="cont up">
                                    <div class="icon"> <i class="fa-thin fa-mug-saucer"></i> </div>
                                    <div class="text">
                                        <h5>Breakfast</h5>
                                        <p>Lorem ipsum is simply dummy fermen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="img/banner/02.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <div class="owl-carousel owl-theme">
                            <div class="item"> <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h5>"Hotel was great. Location was excellent. The staff was incredible. A great
                                    experience all around!"</h5>
                                <div class="info">
                                    <div class="cont">
                                        <h6>Frank E. <i>|</i> <span><a href="#">View on Tripadvisor</a></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h5>"Location was excellent. The staff was incredible. Hotel was great. A great
                                    experience all around!"</h5>
                                <div class="info">
                                    <div class="cont">
                                        <h6>Emily F. <i>|</i> <span><a href="#">View on Tripadvisor</a></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h5>"A great experience all around! Hotel was great. Location was excellent. The staff
                                    was incredible."</h5>
                                <div class="info">
                                    <div class="cont">
                                        <h6>Enrico T. <i>|</i> <span><a href="#">View on Tripadvisor</a></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
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
