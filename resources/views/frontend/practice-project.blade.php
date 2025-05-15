@extends('frontend.layout')
@section ('page-style-files')
    <link href="{{ asset('assets/css/practice.css') }}" rel="stylesheet">
@endsection
@section ('content')
<!-- <section class="page-title pageTitle" style="background-image:url(assets/images/background/3.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>Practice Projects</h1>
            <!- - <ul class="bread-crumb">
                <li><a href="index-2.html">Home</a></li>
                <li>Membership</li>
            </ul> - ->
        </div>
    </div>
</section> -->
<section class="become-instructor" style="padding-top:10px">
    <div class="auto-container">
        <!-- <div class="instructor-inner" id="form-container">
                      <h3>Please subscribe to review the projects</h3>
                      <form id="form">
                          <div class="error"></div>
                        <input type="text" id="name" class="fadeIn second" name="name" placeholder="Full Name">
                        <input type="text" id="email" class="fadeIn third" name="email" placeholder="Email Address">
                        <input type="submit" class="fadeIn fourth" value="Log In" id="form-submit">
                      </form>

      </div> -->
        <div class="instructor-inner" id="form-container">
            <div class="row clearfix">
                <!--Form Column-->
                <div class="col-md-3 col-sm-2 col-xs-12"></div>
                <div class="form-column col-md-6 col-sm-8 col-xs-12">

                    <h2>Join now to Practice</h2>
                    <div class="text">Submit your details in the form below to unlock access to practice apps.</div>
                    <!--Contact Form-->
                    <div class="contact-form">
                        <form id="form">
                            <div class="row clearfix">

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="name" name="name" value="" placeholder="Your Name*" required="required">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" id="email" name="email" value="" placeholder="Your Email*" required="required">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12 text-left">
                                    <input type="checkbox" id="agreeTerms" name="agreeTerms" value=""/>
                                    <label style="display: inline"> We will inform you through email if we launch any Practise Websites for Automation or if there are any new Topics added to your enrolled course.</label>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" id="form-submit" class="theme-btn btn-style-one">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!--End Contact Form-->

                </div>
                <div class="col-md-3 col-sm-2 col-xs-12"></div>
                <!--Info Column-->
            </div>
        </div>
        <div class="instructor-inner" id="code-form-container" style="display: none">
            <div class="row clearfix">
                <!--Form Column-->
                <div class="col-md-3 col-sm-2 col-xs-12"></div>
                <div class="form-column col-md-6 col-sm-8 col-xs-12">

                    <h2>Enter code here</h2>
                    <div class="text">Please enter access code that you received in your email to verify email.</div>
                    <!--Contact Form-->
                    <div class="contact-form">
                        <form id="codeForm">
                            <div class="row clearfix">

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="code" name="code" value="" placeholder="paste code here" required="required">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" id="code-form-submit" class="theme-btn btn-style-one">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!--End Contact Form-->

                </div>
                <div class="col-md-3 col-sm-2 col-xs-12"></div>
                <!--Info Column-->
            </div>
        </div>
        <section id="project-container" class="pb-5" style="background:#fff !important;display: none;padding-top:10px;font-family: 'Montserrat', sans-serif;">
            <div class="container">
                <h5 class="section-title h1" style="color: #333; font-weight: 600;">OUR PROJECTS</h5>
                <p>Watching course and reading tutorials online will only get you so far. To become a great automation engineer, you’ll need a ton of practice. While most online courses provide the students with just the lectures and few course materials but to actually implement the newly acquired knowledge, they are left to scramble for themselves.

                <p>Due to lack of this practice, students struggle to implement the new learnings at their work or struggle with answering interview questions. But at Rahul Shetty Academy, we want to have our students really implement their new knowledge and skills on our dedicated live practice apps which we have developed exclusively for our students.</p>

                <p>We have developed Live Practice apps for different verticals of QA automation like UI / Web, Mobile Apps and API services.</p>
                <div class="projects-item">
                    <p>Web Automation Students (Selenium, Protractor &amp; Cypress) can use below links for Practice</p>

                    <a href="https://rahulshettyacademy.com/seleniumPractise/#/">Automation Practise - 1</a><br/>
                    <a href="https://rahulshettyacademy.com/AutomationPractice/">Automation Practise - 2</a><br/>
                    <a href="https://rahulshettyacademy.com/angularpractice/">Automation Practise - 3</a><br/>
                </div>
                <div class="projects-item">
                    <p>Mobile Automation Students (Appium) can use below links to download the Apps for Practice</p>
                    <a download href="https://drive.google.com/file/d/1Pj-9Zg06UiQIpqUi88TrrtMtFe9VPr1S/view?usp=sharing">Hybrid Android App</a><br/>
                </div>
                <div class="projects-item">
                    <p>API test Automation Students (Rest Assured, SoapUI) can use below links to download the Service/API Contract details</p>
                    <a download href="https://drive.google.com/open?id=18FC3jDnsOol9zn3_KGSrjg35a4unpiSG" >Library API Contract</a><br/>
                    <a download href="https://drive.google.com/file/d/1A3Q_HX8A_GtamXs5kpdZ_7jM8W-OajKS/view?usp=sharing" >Google Maps API Contract</a><br/>
                    <a download href="http://216.10.242.178:8082/axis2/services/EmployeeManagementService?wsdl" >Employee WSDL file</a><br/>
                </div>
            </div>
        </section>
        <!-- Team -->
    </div>
</section>
<script>
    function createCookie(name, value, days) {
        var expires;

        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = ""; //expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
    }

    function readCookie(name) {
        var nameEQ = encodeURIComponent(name) + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0)
                return decodeURIComponent(c.substring(nameEQ.length, c.length));
        }
        return null;
    }

    function eraseCookie(name) {
        createCookie(name, "", -1);
    }

    $(document).ready(function () {
        if(readCookie('name') !== null && readCookie('email')!== null){
            $('#form-container').hide();
            $('#code-form-container').hide();
            $('#project-container, .pageTitle').show();
        }

        $('#form').on('submit',function(e){
            e.preventDefault();

            var data = {
                name: $('#name').val(),
                email: $('#email').val()
            }

            $('#form button[type="submit"]').text('Submiting ...').attr('disabled');
            $.ajax({
                type: "POST",
                url: API + "practice-project",
                data: data,
                // contentType: "text/plain; charset=utf-8",
                // dataType: "json",
                success: function(response) {
                    $('#form button[type="submit"]').text('Submit').removeAttr('disabled');
                    if(response.success){
                        //createCookie('name',data.name,365);
                        //createCookie('email',data.email,365);
                        if(response.isVerified) {
                            createCookie('name',data.name,365);
                            createCookie('email',data.email,365);
                            $('#form-container').hide();
                            $('#code-form-container').hide();
                            $('#project-container, .pageTitle').show();
                        } else {
                            $('#form-container').hide();
                            $('#code-form-container').show();
                            $('#project-container, .pageTitle').hide();
                        }
                    }
                },
                error: function(error) {
                    $('#form button[type="submit"]').text('Submit').removeAttr('disabled');
                    //$('.error').html(error);
                }
            })


        });

        $('#codeForm').on('submit',function(e){
            e.preventDefault();
            if($('#code').val() == ''){
                $('.error').html('Please fill all the fields');
                return;
            }

            $('.error').html('');

            var data = {
                name: $('#name').val(),
                email: $('#email').val(),
                code: $('#code').val()
            }


            $('#codeForm button[type="submit"]').text('Submiting ...').attr('disabled');
            $.ajax({
                type: "POST",
                url: API + "validate-token",
                data: data,
                success: function(response) {
                    $('#codeForm button[type="submit"]').text('Submit').removeAttr('disabled');
                    if(response.success){
                        createCookie('name',data.name,365);
                        createCookie('email',data.email,365);
                        $('#form-container').hide();
                        $('#code-form-container').hide();
                        $('#project-container, .pageTitle').show();
                    } else {
                        alert('wrong code');
                    }
                },
                error: function(error) {
                    $('#codeForm button[type="submit"]').text('Submit').removeAttr('disabled');
                    $('.error').html(error);
                }
            })
        });
    });
</script>
@endsection
