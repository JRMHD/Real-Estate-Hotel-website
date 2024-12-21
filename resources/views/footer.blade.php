 <footer class="footer">
     <!-- top -->
     <div class="top">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 mb-30">
                     <div class="item">
                         <div class="logo"><img src="img/logo.png" alt="" /></div>
                         <p>
                             Ciala Residences offers luxurious homes in Kisumu, blending modern living with resort-style
                             amenities for a peaceful, upscale lifestyle.
                         </p>


                         <div class="social-icons">
                             <ul class="list-inline">
                                 <li>
                                     <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                 </li>
                                 <li>
                                     <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 </li>
                                 <li>
                                     <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 offset-md-1 mb-30">
                     <div class="item">
                         <h3>Contact us</h3>
                         <p>Kisumu City. <br />Kenya</p>
                         <div class="phone">
                             <a href="tel:+254 705818181">+254 705818181</a>
                             <a href="tel:+254 712787744
">+254 712787744
                             </a>
                         </div>
                         <div class="mail">
                             <a href="mailto:info@cialaresidences.com">info@cialaresidences.com</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 mb-30">
                     <div class="item">
                         <h3>Subscribe</h3>
                         <p>
                             Stay updated on our services. Sign up and receive email notifications.
                         </p>

                         <div class="newsletter">
                             <form id="subscribeForm" method="POST">
                                 @csrf
                                 <input type="email" name="email" placeholder="Email Address" required />
                                 <button type="submit">
                                     <i class="fa-light fa-arrow-right"></i>
                                 </button>
                             </form>
                         </div>

                         <!-- Loading spinner -->
                         <div id="loadingSpinner" style="display: none; text-align: center; margin-top: 10px;">
                             <div class="spinner-border" role="status">
                                 <span class="sr-only">Loading...</span>
                             </div>
                             <style>
                                 .spinner-border {
                                     width: 2rem;
                                     height: 2rem;
                                     color: #007bff;
                                 }

                                 #formMessage p {
                                     margin: 0;
                                 }
                             </style>

                         </div>

                         <!-- Success/Error Messages -->
                         <div id="formMessage" style="display: none; margin-top: 10px;"></div>
                     </div>
                     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                     <script>
                         $(document).ready(function() {
                             $('#subscribeForm').on('submit', function(e) {
                                 e.preventDefault();

                                 // Show the loading spinner
                                 $('#loadingSpinner').show();
                                 $('#formMessage').hide();

                                 // Collect form data
                                 let formData = $(this).serialize();

                                 // Send AJAX request
                                 $.ajax({
                                     url: '{{ route('subscribe.submit') }}', // Update with the correct route
                                     method: 'POST',
                                     data: formData,
                                     success: function(response) {
                                         $('#loadingSpinner').hide();
                                         $('#formMessage').html(
                                                 '<p class="text-success">Thank you for subscribing!</p>')
                                             .fadeIn();
                                         $('#subscribeForm')[0].reset(); // Reset the form
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
     </div>
     <!-- bottom -->
     <div class="bottom">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8 col-md-12">
                     <div class="links">
                         <ul>
                             <li><a href="/">Home</a></li>
                             <li><a href="/about">About</a></li>
                             <li><a href="/investment">Why Invest</a></li>


                             <li><a href="/contact">Contact</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-12 text-end">
                     <p>Copyright <span id="year"></span> by <a href="https://www.cialaresort.com/">Ciala
                             Residences</a>. All rights
                         reserved. Designed and Developed by <a href="https://jrmhd.tech/" target="_blank">Jrmhd
                             Technologies</a>.</p>
                 </div>

                 <script>
                     // Auto update the year
                     document.getElementById("year").textContent = new Date().getFullYear();
                 </script>

             </div>
         </div>
     </div>
 </footer>
