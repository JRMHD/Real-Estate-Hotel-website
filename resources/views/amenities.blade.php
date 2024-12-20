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
    <section class="banner-header bg-img bg-fixed" data-overlay-dark="5" data-background="img/banner/09.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="subtitle">Our Services</div>
                    <div class="title">Hotel Amenities</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Amenities -->
    <section class="amenities section-padding bg-lightbrown">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
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
                <div class="col-lg-3 col-md-4">
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
                <div class="col-lg-3 col-md-4">
                    <div class="item hover-box mb-25">
                        <div class="cont up">
                            <div class="icon"> <i class="fa-thin fa-vacuum"></i> </div>
                            <div class="text">
                                <h5>Room Service</h5>
                                <p>Lorem ipsum is simply dummy fermen.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="item hover-box mb-25">
                        <div class="cont up">
                            <div class="icon"> <i class="fa-thin fa-water-ladder"></i> </div>
                            <div class="text">
                                <h5>Indoor Pool</h5>
                                <p>Lorem ipsum is simply dummy fermen.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="item hover-box mb-25">
                        <div class="cont up">
                            <div class="icon"> <i class="fa-thin fa-wifi"></i> </div>
                            <div class="text">
                                <h5>Free Internet</h5>
                                <p>Lorem ipsum is simply dummy fermen.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
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
                <div class="col-lg-3 col-md-4">
                    <div class="item hover-box mb-25">
                        <div class="cont up">
                            <div class="icon"> <i class="fa-thin fa-calendar-days"></i> </div>
                            <div class="text">
                                <h5>Meeting Facilities</h5>
                                <p>Lorem ipsum is simply dummy fermen.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="item hover-box mb-25">
                        <div class="cont up">
                            <div class="icon"> <i class="fa-thin fa-wheelchair"></i> </div>
                            <div class="text">
                                <h5>Wheelchair Friendly</h5>
                                <p>Lorem ipsum is simply dummy fermen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Search -->
    <section class="section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="img/rooms/01.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-20">
                    <div class="section-subtitle">Hotel Experience</div>
                    <div class="section-title white">Booking Form</div>
                </div>
            </div>
            <div class="booking-inner clearfix">
                <form action="#" class="form1 clearfix">
                    <div class="col1 c1">
                        <div class="input1_wrapper border-l border-b border-t border-r">
                            <label>Check in</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check in">
                            </div>
                        </div>
                    </div>
                    <div class="col1 c2">
                        <div class="input1_wrapper border-l border-b border-t border-r">
                            <label>Check out</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check out">
                            </div>
                        </div>
                    </div>
                    <div class="col2 c3">
                        <div class="select1_wrapper border-l border-b border-t border-r">
                            <label>Adults</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c4">
                        <div class="select1_wrapper border-l border-b border-t border-r">
                            <label>Children</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">Children</option>
                                    <option value="1">1 Child</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c5">
                        <div class="select1_wrapper border-l border-b border-t border-r">
                            <label>Rooms</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col3 c6">
                        <button type="submit" class="btn-form1-submit">Check Now</button>
                    </div>
                </form>
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
