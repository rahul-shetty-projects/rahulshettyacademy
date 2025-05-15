@extends('frontend.layout')
@section ('content')
<section class="page-title" style="background-image:url(assets/images/background/3.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>Contact Us</h1>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Form Column-->
            <div class="form-column col-md-7 col-sm-12 col-xs-12">

                <h2>Send Message</h2>
                <div class="text"></div>
                <!--Contact Form-->
                <div class="contact-form">
                    <form id="contactUsForm">
                        <div class="row clearfix">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="username" id="username" value="" placeholder="Your Name*" required="required">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="mobileno" id="mobileno" value="" placeholder="Your Mobile No.*" required="required">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="country" id="country" value="" placeholder="Your Country*" required="required">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="email" name="email" id="email" value="" placeholder="Your Email*" required="required">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <select name="input-subject" id="subject" required="required">
                                    <option value="" default="" selected="" style="display:none">Select a Subject </option>
                                    <option value="Online Courses">Online Courses</option>
                                    <option value="Consulting/Project Support">Consulting/Project Support</option>
                                    <option value="General Query">General Query</option>
                                    <option value="Apply For A Teacher">Apply For A Teacher</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" id="message" placeholder="Your Message*"></textarea>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
                <!--End Contact Form-->

            </div>
            <!--Info Column-->
            <div class="info-column col-md-5 col-sm-12 col-xs-12">
                <div class="info-inner">
                    <h2>Contact Info</h2>
                    <!--Contact Info-->
                    <ul class="contact-info">
                        <li><div class="icon-box"><span class="">@</span></div><h4>E-mail</h4>contact@rahulshettyacademy.com</li>
                        <!-- <li><div class="icon-box"><span class="flaticon-technology-3"></span></div><h4>Phone</h4>(+1) 323-744-6780</li>
                        <li><div class="icon-box"><span class="flaticon-fax"></span></div><h4>fax</h4>(+1) 323-744-6780</li> -->
                        <li><div class="icon-box"><span class="flaticon-location-pin"></span></div><h4>Address</h4>Meenakshi Towers, <br/> Road Number 4, Kundanhalli, <br/>Bangalore, India</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#contactUsForm').on('submit', function (e) {
            e.preventDefault();

            var data = {
                name: $('#username').val(),
                email: $('#email').val(),
                mobile: $('#mobileno').val(),
                country: $('#country').val(),
                subject: $('#subject').val(),
                message: $('#message').val()
            }


            $('#contactUsForm button[type="submit"]').text('Sending ...').attr('disabled');
            $.ajax({
                type: "POST",
                url: API + "contact-form",
                data: data,
                success: function (response) {
                    $('#contactUsForm button[type="submit"]').text('Send Message').removeAttr('disabled');
                    if (response.success) {
                        $('#alertWrapper').find('.modal-body p').text('Thanks for Contacting us. We will get back to you shortly.');
                        $('#alertWrapper').modal('show');
                    }
                },
                error: function (error) {
                    //$('#form-submit').val('Log in').removeAttr('disabled');
                    //$('.error').html(error);
                }
            });
        });
    });
</script>
@endsection
