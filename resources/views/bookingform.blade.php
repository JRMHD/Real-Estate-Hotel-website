<section class="section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="img/rooms/01.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-20">
                <div class="section-subtitle">Ciala Residences</div>
                <div class="section-title white">Site Visit or Inquiry Form</div>
            </div>
        </div>
        <div class="booking-inner clearfix">
            <form id="inquiryForm" method="POST" class="form1 clearfix">
                @csrf
                <div class="col1 c1">
                    <div class="input1_wrapper border-l border-b border-t border-r">
                        <label>Preferred Date</label>
                        <div class="input1_inner">
                            <input type="text" class="form-control input datepicker" name="preferred_date"
                                placeholder="Select Preferred Date" required />
                        </div>
                    </div>
                </div>
                <div class="col1 c2">
                    <div class="input1_wrapper border-l border-b border-t border-r">
                        <label>Preferred Time</label>
                        <div class="input1_inner">
                            <input type="time" class="form-control input" name="preferred_time"
                                placeholder="Select Preferred Time" required />
                        </div>
                    </div>
                </div>
                <div class="col2 c3">
                    <div class="input1_wrapper border-l border-b border-t border-r">
                        <label>Full Name</label>
                        <div class="input1_inner">
                            <input type="text" class="form-control input" name="full_name"
                                placeholder="Enter Your Full Name" required />
                        </div>
                    </div>
                </div>
                <div class="col2 c4">
                    <div class="input1_wrapper border-l border-b border-t border-r">
                        <label>Email Address</label>
                        <div class="input1_inner">
                            <input type="email" class="form-control input" name="email"
                                placeholder="Enter Your Email Address" required />
                        </div>
                    </div>
                </div>
                <div class="col2 c5">
                    <div class="input1_wrapper border-l border-b border-t border-r">
                        <label>Phone Number</label>
                        <div class="input1_inner">
                            <input type="tel" class="form-control input" name="phone"
                                placeholder="Enter Your Phone Number" required />
                        </div>
                    </div>
                </div>
                <div class="col2 c6">
                    <div class="input1_wrapper border-l border-b border-t border-r">
                        <label>Message or Inquiry</label>
                        <div class="input1_inner">
                            <textarea class="form-control input" name="message" placeholder="Enter Your Message or Inquiry" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col3 c7">
                    <button type="submit" class="btn-form1-submit">Submit Inquiry</button>
                </div>
            </form>
            <div id="loadingSpinner" style="display:none; text-align:center; margin-top:20px;">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div id="formStatusMessage" style="margin-top:20px;"></div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('inquiryForm');
        const spinner = document.getElementById('loadingSpinner');
        const statusMessage = document.getElementById('formStatusMessage');

        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the form from submitting the traditional way

            // Clear any previous messages
            statusMessage.innerHTML = '';

            // Show spinner
            spinner.style.display = 'block';

            // Collect form data
            const formData = new FormData(form);

            // Send AJAX request
            fetch('{{ route('site.visit.inquiry.submit') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => {
                    spinner.style.display = 'none'; // Hide spinner
                    if (!response.ok) {
                        throw new Error('Failed to submit the form.');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.message) {
                        statusMessage.innerHTML =
                            `<div class="alert alert-success">${data.message}</div>`;
                        form.reset(); // Reset the form on success
                    }
                })
                .catch(error => {
                    spinner.style.display = 'none'; // Hide spinner
                    statusMessage.innerHTML =
                        `<div class="alert alert-danger">An error occurred: ${error.message}</div>`;
                });
        });
    });
</script>
