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
    <section class="banner-header bg-img bg-fixed" data-overlay-dark="5" data-background="img/banner/08.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="subtitle">Our Services</div>
                    <div class="title">Hotel Facilities</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities 2 -->
    <section class="facilities2 bg-lightbrown">
        <div class="border-bottom">
            <div class="container">
                <ul class="tab-buttons">
                    <li data-tab="#restaurant" class="tab-btn active-btn"><span>Restaurant</span></li>
                    <li data-tab="#spa" class="tab-btn"><span>Spa & Wellness</span></li>
                    <li data-tab="#pool" class="tab-btn"><span>Pool Swimming</span></li>
                    <li data-tab="#fitness" class="tab-btn"><span>Fitness Center</span></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="tabs-content">
                <!--tab-->
                <div class="tab active-tab" id="restaurant">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/offers/05.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="section-subtitle">Addres of taste</div>
                            <div class="section-title">Restaurant</div>
                            <p class="mb-25">Restaurant quisue sodale intion varius estibum miss arman ortiton telus
                                euismod nis the massa fermen.</p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon"> <span class="fa-regular fa-check"></span> </div>
                                    <div class="list-text">
                                        <p>Breakfast: 7.00 am – 11.00 am (daily)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="fa-regular fa-check"></span> </div>
                                    <div class="list-text">
                                        <p>Lunch: 12.00 pm – 2.00 pm (daily)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="fa-regular fa-check"></span> </div>
                                    <div class="list-text">
                                        <p>Dinne: 6.30 pm – 10.00 pm (daily)</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="button-3"><i class="fa-solid fa-user-chef"></i> View menu</a>
                        </div>
                    </div>
                </div>
                <!--tab-->
                <div class="tab" id="spa">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/offers/06.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="section-subtitle">So Many Ways to Unwind</div>
                            <div class="section-title">Spa & Wellness</div>
                            <p class="mb-25">Wellness quisque sodales intioni varius estibum miss arman ortiton telus
                                euismod nis the massa nutodio farmention lorem pretium ametis velen fermen.</p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon"> <span class="fa-regular fa-check"></span> </div>
                                    <div class="list-text">
                                        <p>Overnight de-stress retreat</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="fa-regular fa-check"></span> </div>
                                    <div class="list-text">
                                        <p>Wedding spa packages</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="button-3"><i class="fa-solid fa-spa"></i> View details</a>
                        </div>
                    </div>
                </div>
                <!--tab-->
                <div class="tab" id="pool">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/offers/07.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="section-subtitle">Indoor & Outdoor</div>
                            <div class="section-title">Pool Swimming</div>
                            <p class="mb-25">Swimming quisque sodales intioni varius estibum miss arman ortiton telus
                                euismod nis the massa nutodio farmention lorem pretium ametis velen fermen.</p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon"> <span class="fa-regular fa-check"></span> </div>
                                    <div class="list-text">
                                        <p>Indoor pool swimming</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="fa-regular fa-check"></span> </div>
                                    <div class="list-text">
                                        <p>Outdoor pool swimming</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="button-3"><i class="fa-solid fa-person-swimming"></i> View
                                details</a>
                        </div>
                    </div>
                </div>
                <!--tab-->
                <div class="tab" id="fitness">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/offers/08.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="section-subtitle">Training Spaces</div>
                            <div class="section-title">Fitness Center</div>
                            <p class="mb-25">Fitness quisque sodales intioni varius estibum miss arman ortiton telus
                                euismod nis the massa nutodio farmention lorem pretium ametis velen fermen.</p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon"> <span class="fa-regular fa-check"></span> </div>
                                    <div class="list-text">
                                        <p>Cardiovascular equipment</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="fa-regular fa-check"></span> </div>
                                    <div class="list-text">
                                        <p>Some dumbells for weight lifting</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="button-3"><i class="fa-solid fa-dumbbell"></i> View details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities 1 -->
    <section class="facilities section-padding">
        <div class="container">
            <div class="row mb-25">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">Hotel Facilities</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="img"><img src="img/offers/09.jpg" class="img-fluid" alt=""></div>
                        <div class="cont"> <i class="fa-thin fa-utensils"></i>
                            <h4>Restaurant</h4>
                            <p>Culinary Experiences</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="img"><img src="img/offers/10.jpg" class="img-fluid" alt=""></div>
                        <div class="cont"> <i class="fa-thin fa-spa"></i>
                            <h4>Spa & Wellness</h4>
                            <p>Sauna, Massage</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item"> <img src="img/offers/11.jpg" class="img-fluid" alt="">
                        <div class="cont"> <i class="fa-thin fa-person-swimming"></i>
                            <h4>Pool Swimming</h4>
                            <p>Indoor & Outdoor</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item"> <img src="img/offers/12.jpg" class="img-fluid" alt="">
                        <div class="cont"> <i class="fa-thin fa-dumbbell"></i>
                            <h4>Fitness Center</h4>
                            <p>Training Spaces</p>
                        </div>
                        <div class="overlay"></div>
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
