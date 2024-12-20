<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Rixos - Luxury Hotel Template</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Gilda+Display&amp;family=Urbanist:wght@300;400;500;600&amp;display=swap" />
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
                </div>
                <img src="img/preloader.png" alt="" />
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
    <!-- Kenburns SlideShow -->
    <aside class="kenburns-section" id="kenburnsSliderContainer" data-overlay-dark="5">
        <div class="kenburns-inner h-100">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12 text-center">
                            <h5>Rixos Resort & Luxury Hotel</h5>
                            <h1>Enjoy a luxury experience</h1>
                            <a href="#" class="button-2">Rooms & Suites</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- Booking Search -->
    <div class="booking-wrapper">
        <div class="container">
            <div class="booking-inner clearfix">
                <form action="#" class="form1 clearfix">
                    <div class="col1 c1">
                        <div class="input1_wrapper border-l border-b border-t border-r br-5005">
                            <label>Check in</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check in" />
                            </div>
                        </div>
                    </div>
                    <div class="col1 c2">
                        <div class="input1_wrapper border-l border-b border-t border-r">
                            <label>Check out</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check out" />
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
    </div>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-15">
                    <div class="section-subtitle">About Rixos</div>
                    <div class="section-title">
                        Laid-back places for kindred spirits
                    </div>
                    <p>
                        Welcome to the <b>best five-star resort hotel</b> in New York. The
                        experience elementum sesue the aucan vestibulum alesun usto in
                        sapien rutrum volutan donec fermen.
                    </p>
                    <p class="mb-40">
                        Lorem ipsum quisque sodales miss in the varius drana miss turpis
                        softtiton tellus in the fermen.
                    </p>
                    <a href="#" class="button-3 mb-15">About Rixos</a>
                    <div class="phone">
                        <a href="tel:+12345678910"><i class="fa-light fa-phone"></i>+1 234 567 8910</a>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 mb-20 mt-45">
                    <img class="rounded-2 animation-float1" src="img/about01.jpg" alt="" />
                </div>
                <div class="col-lg-3 col-md-6 mb-20">
                    <img class="rounded-2 animation-float2" src="img/about02.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms 3 -->
    <section class="rooms3 section-padding bg-darkgray">
        <div class="row">
            <div class="col-md-12 mb-25 text-center">
                <div class="section-subtitle">Luxury Rixos Hotel</div>
                <div class="section-title white">Rooms <span>&</span> Suites</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="img">
                            <img src="img/rooms/01.jpg" class="img-fluid" alt="" />
                        </div>
                        <span class="discount"><i class="fa-light fa-badge-percent"></i> Get 25% Off</span>
                        <div class="cont">
                            <div class="title"><a href="#">Deluxe Room</a></div>
                            <div class="details">
                                <span><i class="fa-thin fa-bed-front"></i> 2 Bed</span>
                                <span><i class="fa-thin fa-bath"></i>1 Bathroom</span>
                                <span><i class="fa-thin fa-expand"></i> 15 Sqm</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="img/rooms/02.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="cont">
                            <div class="title"><a href="#">Family Room</a></div>
                            <div class="details">
                                <span><i class="fa-thin fa-bed-front"></i> 2-4 Bed</span>
                                <span><i class="fa-thin fa-mug-saucer"></i>Breakfast</span>
                                <span><i class="fa-thin fa-expand"></i> 20 Sqm</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="img/rooms/03.jpg" class="img-fluid" alt="" />
                        </div>
                        <span class="discount"><i class="fa-light fa-badge-percent"></i> Get 30% Off</span>
                        <div class="cont">
                            <div class="title"><a href="#">Double Room</a></div>
                            <div class="details">
                                <span><i class="fa-thin fa-bed-front"></i> 4 Bed</span>
                                <span><i class="fa-thin fa-bath"></i>2 Bathroom</span>
                                <span><i class="fa-thin fa-expand"></i> 25 Sqm</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="img/rooms/04.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="cont">
                            <div class="title"><a href="#">Superior Room</a></div>
                            <div class="details">
                                <span><i class="fa-thin fa-bed-front"></i> 3 Bed</span>
                                <span><i class="fa-thin fa-bath"></i>1 Bathroom</span>
                                <span><i class="fa-thin fa-expand"></i> 30 Sqm</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="img/rooms/05.jpg" class="img-fluid" alt="" />
                        </div>
                        <span class="discount"><i class="fa-light fa-badge-percent"></i> Get 40% Off</span>
                        <div class="cont">
                            <div class="title"><a href="#">Wellness Room</a></div>
                            <div class="details">
                                <span><i class="fa-thin fa-bed-front"></i> 4 Bed</span>
                                <span><i class="fa-thin fa-mug-saucer"></i>Breakfast</span>
                                <span><i class="fa-thin fa-expand"></i> 30 Sqm</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="img/rooms/06.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="cont">
                            <div class="title"><a href="#">King Room</a></div>
                            <div class="details">
                                <span><i class="fa-thin fa-bed-front"></i> 4 Bed</span>
                                <span><i class="fa-thin fa-bath"></i>2 Bathroom</span>
                                <span><i class="fa-thin fa-expand"></i> 40 Sqm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities -->
    <section class="facilities2 bg-lightbrown">
        <div class="border-bottom">
            <div class="container">
                <ul class="tab-buttons">
                    <li data-tab="#restaurant" class="tab-btn active-btn">
                        <span>Restaurant</span>
                    </li>
                    <li data-tab="#spa" class="tab-btn"><span>Spa & Wellness</span></li>
                    <li data-tab="#pool" class="tab-btn"><span>Pool Swimming</span></li>
                    <li data-tab="#fitness" class="tab-btn">
                        <span>Fitness Center</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="tabs-content">
                <!--tab 1-->
                <div class="tab active-tab" id="restaurant">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/offers/05.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="section-subtitle">Addres of taste</div>
                            <div class="section-title">Restaurant</div>
                            <p class="mb-25">
                                Restaurant quisue sodale intion varius estibum miss arman
                                ortiton telus euismod nis the massa fermen.
                            </p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon">
                                        <span class="fa-regular fa-check"></span>
                                    </div>
                                    <div class="list-text">
                                        <p>Breakfast: 7.00 am – 11.00 am (daily)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon">
                                        <span class="fa-regular fa-check"></span>
                                    </div>
                                    <div class="list-text">
                                        <p>Lunch: 12.00 pm – 2.00 pm (daily)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon">
                                        <span class="fa-regular fa-check"></span>
                                    </div>
                                    <div class="list-text">
                                        <p>Dinne: 6.30 pm – 10.00 pm (daily)</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="button-3"><i class="fa-solid fa-user-chef"></i> View menu</a>
                        </div>
                    </div>
                </div>
                <!--tab 2-->
                <div class="tab" id="spa">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/offers/06.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="section-subtitle">So Many Ways to Unwind</div>
                            <div class="section-title">Spa & Wellness</div>
                            <p class="mb-25">
                                Wellness quisque sodales intioni varius estibum miss arman
                                ortiton telus euismod nis the massa nutodio farmention lorem
                                pretium ametis velen fermen.
                            </p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon">
                                        <span class="fa-regular fa-check"></span>
                                    </div>
                                    <div class="list-text">
                                        <p>Overnight de-stress retreat</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon">
                                        <span class="fa-regular fa-check"></span>
                                    </div>
                                    <div class="list-text">
                                        <p>Wedding spa packages</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="button-3"><i class="fa-solid fa-spa"></i> View details</a>
                        </div>
                    </div>
                </div>
                <!--tab 3-->
                <div class="tab" id="pool">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/offers/07.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="section-subtitle">Indoor & Outdoor</div>
                            <div class="section-title">Pool Swimming</div>
                            <p class="mb-25">
                                Swimming quisque sodales intioni varius estibum miss arman
                                ortiton telus euismod nis the massa nutodio farmention lorem
                                pretium ametis velen fermen.
                            </p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon">
                                        <span class="fa-regular fa-check"></span>
                                    </div>
                                    <div class="list-text">
                                        <p>Indoor pool swimming</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon">
                                        <span class="fa-regular fa-check"></span>
                                    </div>
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
                <!--tab 4-->
                <div class="tab" id="fitness">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <img src="img/offers/08.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-12">
                            <div class="section-subtitle">Training Spaces</div>
                            <div class="section-title">Fitness Center</div>
                            <p class="mb-25">
                                Fitness quisque sodales intioni varius estibum miss arman
                                ortiton telus euismod nis the massa nutodio farmention lorem
                                pretium ametis velen fermen.
                            </p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon">
                                        <span class="fa-regular fa-check"></span>
                                    </div>
                                    <div class="list-text">
                                        <p>Cardiovascular equipment</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon">
                                        <span class="fa-regular fa-check"></span>
                                    </div>
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
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="img/banner/02.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h5>
                                    "Hotel was great. Location was excellent. The staff was
                                    incredible. A great experience all around!"
                                </h5>
                                <div class="info">
                                    <div class="cont">
                                        <h6>
                                            Frank E. <i>|</i>
                                            <span><a href="#">View on Tripadvisor</a></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h5>
                                    "Location was excellent. The staff was incredible. Hotel was
                                    great. A great experience all around!"
                                </h5>
                                <div class="info">
                                    <div class="cont">
                                        <h6>
                                            Emily F. <i>|</i>
                                            <span><a href="#">View on Tripadvisor</a></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h5>
                                    "A great experience all around! Hotel was great. Location
                                    was excellent. The staff was incredible."
                                </h5>
                                <div class="info">
                                    <div class="cont">
                                        <h6>
                                            Enrico T. <i>|</i>
                                            <span><a href="#">View on Tripadvisor</a></span>
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
    <!-- Amenities -->
    <section class="amenities section-padding bg-lightbrown">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="section-subtitle">Hotel Services</div>
                    <div class="section-title">Amenities</div>
                    <p class="mb-25">
                        The experience elementum sesue in the aucantion alesun in sapien
                        fermen miss caleustion in the sapien.
                    </p>
                    <a href="amenities.html" class="button-3">All Amenities</a>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="item hover-box mb-25">
                                <div class="cont up">
                                    <div class="icon">
                                        <i class="fa-thin fa-truck-plane"></i>
                                    </div>
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
                                    <div class="icon">
                                        <i class="fa-thin fa-circle-parking"></i>
                                    </div>
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
                                    <div class="icon"><i class="fa-thin fa-bed-front"></i></div>
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
                                    <div class="icon">
                                        <i class="fa-thin fa-water-ladder"></i>
                                    </div>
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
                                    <div class="icon"><i class="fa-thin fa-wifi"></i></div>
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
                                    <div class="icon">
                                        <i class="fa-thin fa-mug-saucer"></i>
                                    </div>
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
                                    <textPath xlink:href="#textcircle" textLength="900">
                                        rixos luxury resort hotel
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                        <span class="icon"> <i class="fas fa-play"></i> </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- video text -->
        <div class="video-text">videos</div>
    </section>
    <!-- Pricing 1 -->
    <section class="pricing1 section-padding bg-lightbrown">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-20">
                    <div class="section-subtitle">Pricing Plan</div>
                    <div class="section-title">Extra Prices</div>
                </div>
            </div>
            <div class="row justify-content-center g-0">
                <div class="col-12 pricing">
                    <div class="item">
                        <div class="img">
                            <img src="img/pricing/01.jpg" class="img-fluid" alt="" />
                            <div class="title">Beverage</div>
                            <div class="overlay"></div>
                        </div>
                        <div class="flex-column cont">
                            <div class="cont-hover">
                                <div class="icon">
                                    <i class="fa-thin fa-martini-glass"></i>
                                </div>
                                <p>
                                    In-room beverage lorem ipsum simply drana print typesettin
                                    induren.
                                </p>
                                <div class="price">$49 <span>per night</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <div class="img">
                            <img src="img/pricing/02.jpg" class="img-fluid" alt="" />
                            <div class="title">Cleaning</div>
                            <div class="overlay"></div>
                        </div>
                        <div class="flex-column cont">
                            <div class="cont-hover">
                                <div class="icon"><i class="fa-thin fa-vacuum"></i></div>
                                <p>
                                    Cleaning lorem in ipsum simply the drana print typesettin
                                    induren.
                                </p>
                                <div class="price">$29 <span>daily</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="img/pricing/03.jpg" class="img-fluid" alt="" />
                            <div class="title">Breakfast</div>
                            <div class="overlay"></div>
                        </div>
                        <div class="flex-column cont">
                            <div class="cont-hover">
                                <div class="icon"><i class="fa-thin fa-mug-saucer"></i></div>
                                <p>
                                    Room breakfast lorem ipsum simply drana print typesettin
                                    induren.
                                </p>
                                <div class="price">$69 <span>daily</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mt-30">
                    <div class="section-info">
                        <div class="tag">Questions</div>
                        <div class="desc">
                            You can send your questions to the mail address:
                            <a href="mailto:info@hotels.com" class="text-decoration-line-bottom">info@hotels.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers 2 -->
    <section class="offers2">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-3">
                    <a href="#" class="item" data-tab="tab-1">
                        <h5>Stay</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="item" data-tab="tab-2">
                        <h5>Dine</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="item" data-tab="tab-3">
                        <h5>Relax</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="item" data-tab="tab-4">
                        <h5>Weddings</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="glry-img">
            <img id="tab-1" src="img/rooms/01.jpg" alt="" class="tab-img current" />
            <img id="tab-2" src="img/banner/03.jpg" alt="" class="tab-img" />
            <img id="tab-3" src="img/banner/04.jpg" alt="" class="tab-img" />
            <img id="tab-4" src="img/banner/05.jpg" alt="" class="tab-img" />
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
                                <input type="text" class="form-control input datepicker" placeholder="Check in" />
                            </div>
                        </div>
                    </div>
                    <div class="col1 c2">
                        <div class="input1_wrapper border-l border-b border-t border-r">
                            <label>Check out</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker"
                                    placeholder="Check out" />
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
    <script src="js/vegas.slider.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- Vegas Background Slideshow (vegas.slider kenburns) -->
    <script>
        $(document).ready(function() {
            $("#kenburnsSliderContainer").vegas({
                slides: [{
                        src: "img/rooms/01.jpg",
                    },
                    {
                        src: "img/rooms/02.jpg",
                    },
                    {
                        src: "img/rooms/03.jpg",
                    },
                ],
                overlay: true,
                transition: "fade2",
                animation: "kenburnsUpRight",
                transitionDuration: 1000,
                delay: 10000,
                animationDuration: 20000,
            });
        });
    </script>
</body>

</html>
