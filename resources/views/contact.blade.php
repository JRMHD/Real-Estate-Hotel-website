<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Contact Us | Ciala Residences - Get in Touch</title>
    <meta name="description"
        content="Reach out to Ciala Residences for inquiries about our luxury homes, amenities, and investment opportunities in Kisumu. Contact us today for more details!" />
    <meta name="keywords"
        content="Contact Ciala Residences, Kisumu luxury homes, real estate inquiries Kisumu, Ciala contact information, luxury living Kenya" />
    <meta name="author" content="Jrmhd Technologies" />

    <!-- Open Graph Meta Tags (for social media) -->
    <meta property="og:title" content="Contact Us | Ciala Residences" />
    <meta property="og:description"
        content="Have questions about Ciala Residences? Contact us for details on luxury living, amenities, and investment opportunities in Kisumu." />
    <meta property="og:url" content="https://cialaresidences.com/contact" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://cialaresidences.com/img/og-contact.jpg" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact Us | Ciala Residences" />
    <meta name="twitter:description"
        content="Get in touch with Ciala Residences for information on luxury living and investment opportunities in Kisumu." />
    <meta name="twitter:image" content="https://cialaresidences.com/img/twitter-contact.jpg" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" />

    <!-- Fonts and Styles -->
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
                                        <h2 class="title">Kisumu, Kenya</h2>
                                        <p class="text">Kenya East Africa</p>
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
                                        <p class="text">Phone: +254 705818181</p>
                                        <p class="text">Phone: +254 712787744
                                        </p>
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
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510696.3078026372!2d34.40850513911419!3d-0.07497160900882109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa437ad4ac81d%3A0x2012a439d6248dd2!2sKisumu!5e0!3m2!1sen!2ske!4v1734783494634!5m2!1sen!2ske"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-12">
                    <div class="form2-sidebar mt--240">
                        <form id="contactForm" method="POST" class="form2">
                            @csrf
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
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" cols="30" rows="4" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="button-3">
                                            <i class="fa-light fa-paper-plane"></i> Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Loading spinner -->
                            <div id="loadingSpinner" style="display: none; text-align: center; margin-top: 15px;">
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <!-- Success/Failure Messages -->
                            <div id="formMessage" style="display: none; margin-top: 15px;"></div>
                            <style>
                                .spinner-border {
                                    width: 3rem;
                                    height: 3rem;
                                    color: #007bff;
                                }
                            </style>

                        </form>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#contactForm').on('submit', function(e) {
                                e.preventDefault();

                                // Show the loading spinner
                                $('#loadingSpinner').show();
                                $('#formMessage').hide();

                                // Collect form data
                                let formData = $(this).serialize();

                                // Send the AJAX request
                                $.ajax({
                                    url: '{{ route('contact.submit') }}', // Update with the correct route
                                    method: 'POST',
                                    data: formData,
                                    success: function(response) {
                                        $('#loadingSpinner').hide();
                                        $('#formMessage').html(
                                                '<p class="text-success">Message Sent successfully!</p>')
                                            .fadeIn();
                                        $('#contactForm')[0].reset(); // Reset the form
                                    },
                                    error: function(xhr) {
                                        $('#loadingSpinner').hide();
                                        let errorMessage = 'Something went wrong. Please try again.';
                                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                                            errorMessage = Object.values(xhr.responseJSON.errors).join('<br>');
                                        }
                                        $('#formMessage').html('<p class="text-danger">' + errorMessage +
                                            '</p>').fadeIn();
                                    }
                                });
                            });
                        });
                    </script>

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
                    <p class="mb-25">At Ciala Residences, we are dedicated to providing an exceptional stay. Below are
                        some frequently asked questions to help you make the most of your time with us.</p>
                    <a href="#" class="button-3">All Questions</a>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-12">
                    <ul class="accordion-box clearfix">
                        <!-- Question 1 -->
                        <li class="accordion block">
                            <div class="acc-btn">Do you offer special discounts or promotions?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Yes, we offer exclusive promotions and discounts for early bookings and seasonal
                                        offers. Be sure to subscribe to our newsletter or check our website for the
                                        latest deals.</p>
                                </div>
                            </div>
                        </li>

                        <!-- Question 2 -->
                        <li class="accordion block">
                            <div class="acc-btn">How can I contact Ciala Residences?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>You can reach us via email at info@cialaresidences.com or call us at +254
                                        705818181. Our team is available 24/7 to assist you with any inquiries.</p>
                                </div>
                            </div>
                        </li>

                        <!-- Question 3 -->
                        <li class="accordion block">
                            <div class="acc-btn">Can I cancel or modify my reservation?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Yes, you can cancel or modify your reservation within the terms specified during
                                        booking. Please refer to our cancellation policy or contact our reservations
                                        team for further assistance.</p>
                                </div>
                            </div>
                        </li>

                        <!-- Question 4 -->
                        <li class="accordion block">
                            <div class="acc-btn">Do you have wellness and spa services?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Yes, we offer a full range of wellness and spa services at our luxury resort.
                                        Enjoy rejuvenating spa treatments, massages, and wellness programs to enhance
                                        your stay.</p>
                                </div>
                            </div>
                        </li>

                        <!-- Question 5 -->
                        <li class="accordion block">
                            <div class="acc-btn">Are pets allowed at Ciala Residences?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>We are a pet-friendly residence! Well-behaved pets are welcome, with prior
                                        approval. Please check our pet policy for more details.</p>
                                </div>
                            </div>
                        </li>

                        <!-- Question 6 -->
                        <li class="accordion block">
                            <div class="acc-btn">Is parking available at Ciala Residences?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>Yes, we offer complimentary parking for all our guests. Secure parking facilities
                                        are available to ensure your peace of mind during your stay.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
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
