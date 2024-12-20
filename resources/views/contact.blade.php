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
    <section class="banner-header bg-img bg-fixed" data-overlay-dark="5" data-background="img/contact.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subtitle">Get in touch</div>
                    <div class="title">Contact us</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact section-padding bg-lightbrown">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="row mb-30">
                        <div class="col-lg-6 col-md-12 mb-25">
                            <div class="item">
                                <div class="front">
                                    <div class="contents"> <span class="fa-thin fa-location-dot"></span>
                                        <h2 class="title">Rixos Hotel, USA</h2>
                                        <p class="text">65 Broad st. 01234 NY. USA</p>
                                    </div>
                                </div>
                                <div class="back"> <img class="img img-fluid" src="img/contact2.jpg">
                                    <div class="contents">
                                        <div class="btnx">Location map</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-25">
                            <div class="item">
                                <div class="front">
                                    <div class="contents"> <span class="fa-thin fa-phone"></span>
                                        <h2 class="title">Let's talk with us</h2>
                                        <p class="text">Phone: +1 234 567 8910</p>
                                    </div>
                                </div>
                                <div class="back"> <img class="img img-fluid" src="img/contact3.jpg">
                                    <div class="contents">
                                        <div class="btnx">Talk with us</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573147.7480448114!2d-74.84628175962355!3d41.04009641088412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25856139b3d33%3A0xb2739f33610a08ee!2s1616%20Broadway%2C%20New%20York%2C%20NY%2010019%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1646760525018!5m2!1str!2str"
                                    width="100%" height="450" style="border:0; border-radius: 5px"
                                    allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-12">
                    <div class="form2-sidebar mt--240">
                        <form action="#" class="form2">
                            <div class="head">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Get in touch!</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <input type="text" placeholder="Name" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <input type="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <input type="text" placeholder="Phone" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="button-3"><i class="fa-light fa-paper-plane"></i>
                                            Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQs -->
    <section class="faqs section-padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-12 mb-30">
                    <div class="section-subtitle">Popular Questions</div>
                    <div class="section-title">Frequently Asked Questions</div>
                    <p class="mb-25">The experience elementum sesue in the aucantion alesun in sapien fermen miss
                        caleustion in the sapien.</p> <a href="#" class="button-3">All Questions</a>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">Do you have any discount code?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry sapien
                                        fermen drana inthe miss molestie non tempor fermen the varius vestibulum drana.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">How can I get in touch with my hotel?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry sapien
                                        fermen drana inthe miss molestie non tempor fermen the varius vestibulum drana.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Can I cancel my reservation?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry sapien
                                        fermen drana inthe miss molestie non tempor fermen the varius vestibulum drana.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Do you have hotels with a spa?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry sapien
                                        fermen drana inthe miss molestie non tempor fermen the varius vestibulum drana.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
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