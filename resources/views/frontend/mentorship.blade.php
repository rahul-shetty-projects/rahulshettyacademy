@extends('frontend.layout')
@section ('css')
<style>
    .testimonial {
        font-weight: 600;
        color: #555;
    }

    .blinkingText{
        color: #ec5252;
        font-weight: bold;
        animation: blink 1s linear infinite;
    }
    @keyframes blink{
        0%{opacity: .5;}
        50%{opacity: 0;}
        100%{opacity: 1;}
    }
</style>
@endsection
@section ('content')
<section class="page-title" style="background-image:url(assets/images/background/3.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>Mentorship</h1>
            <!-- <ul class="bread-crumb">
                <li><a href="index-2.html">Home</a></li>
                <li>Membership</li>
            </ul> -->
        </div>
    </div>
</section>

<div class="container-fluid" style="padding-top:50px">
    <div class="row clearfix">

        <!--Content Side-->
        <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <!-- <div id="plan">
              <div class="title">
                <h1>$299 <span>/month</span></h1>
                <p>Simple</p>

              </div>
            <div class="containDetails">
            <ul class="details">
              <li class="first">5 <span>Accounts</span></li>
              <li>50GB<span>Storage</span></li>
              <li>1 <span>Domain</span></li>
              <li>500GB<span>Bandwidth</span></li>
            </ul>
              </div>
              <div class="end">
                <div class="select">
                <a href="#" class="button button-flat-royal button-pill">Select Plan</a>
                </div></div>
            </div>


            <div id="plan">
              <div class="title">
                <h1>$1199 <span>/month</span></h1>
                <p>Gold</p>

              </div>
            <div class="containDetails">
            <ul class="details">
              <li class="first">5 <span>Accounts</span></li>
              <li>50GB<span>Storage</span></li>
              <li>1 <span>Domain</span></li>
              <li>500GB<span>Bandwidth</span></li>
            </ul>
              </div>
              <div class="end">
                <div class="select">
                <a href="#" class="button button-flat-royal button-pill">Select Plan</a>
                </div></div>
            </div>

            <div id="plan">
              <div class="title">
                <h1>$499 <span>/month</span></h1>
                <p>Plus</p>

              </div>
            <div class="containDetails">
            <ul class="details">
              <li class="first">5 <span>Accounts</span></li>
              <li>50GB<span>Storage</span></li>
              <li>1 <span>Domain</span></li>
              <li>500GB<span>Bandwidth</span></li>
            </ul>
              </div>
              <div class="end">
                <div class="select">
                <a href="#" class="button button-flat-royal button-pill">Select Plan</a>
                </div></div>
            </div> -->

            <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-weight: 600;color: #555;">Mentorship can be a significant part of your overall career success, both early on in your career and even late in your professional life. After having taught over 300,000 students from 195 countries and interacting with tons of students both in-person and through my courses, I got to better understand the challenges and technical problems faced by both QA professionals and the student community. I get scores of emails daily requesting for help in solving their automation challenges, resume review and career guidance. Based on popular request and to better serve our student community, we decide to launch mentorship program and essentially there are two packages we offer as listed below. <span class="blinkingText">Limited offer - Get Any 4 Courses for FREE by opting into Platinum Mentorship Subscription</span></div>

            <div class="row" style="padding:25px">
                <div class="pricing-container bronze-color pricing-container-flex text-center clearfix col-lg-12 col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-header pricing-header-1 bg-teal text-teal col-lg-4">
                        <div class="bg-pattern-1">
                            <h1 class="pricing-title text-white ls-1">BRONZE</h1><span class="l-block h-6 text-white ls-1 margin-top-n-1-25">( For Short-term Use )</span>
                        </div>
                    </div>
                    <div class="pricing-body bg-white col-lg-6">
                        <ul class="pricing-list col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0 text-left text-dark margin-bottom-0 h-7">
                            <li><i class="fa fa-check"></i> Direct access to Rahul Shetty on Live call</li>
                            <li><i class="fa fa-check"></i> The call is time boxed for 20 mins.</li>
                            <li><i class="fa fa-check"></i> Email support for 3 weeks</li>
                            <li><i class="fa fa-check"></i> Benefits of resume review, career advice, strategy for your automation project, any queries related to automation and software testing.</li>
                            <li><i class="fa fa-check"></i> Get help with setting career goals.</li>
                        </ul>
                    </div>
                    <div class="pricing-footer text-center col-lg-2">
                        <button class="btn btn-lg btn-teal btn-mw-150 border-radius-50 mentorshipJoinBtn"><span class="h-7">JOIN NOW</span></button>
                        <h3 class="pricing-price ls-1 text-dark margin-top-1-25">$30.00</h3>
                    </div>
                </div>
                <div class="pricing-container platinum-color pricing-container-flex text-center clearfix col-lg-12 col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-header pricing-header-1 bg-teal text-teal col-lg-4">
                        <div class="bg-pattern-1">
                            <h1 class="pricing-title text-white ls-1">PLATINUM</h1><span class="l-block h-6 text-white ls-1 margin-top-n-1-25">( For Long-term Use )</span>
                        </div>
                    </div>
                    <div class="pricing-body bg-white col-lg-6">
                        <ul class="pricing-list col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0 text-left text-dark margin-bottom-0 h-7">
                            <li><i class="fa fa-check"></i> Direct access to Rahul Shetty on Live call</li>
                            <li><i class="fa fa-check"></i> Max 5 Live calls</li>
                            <li><i class="fa fa-check"></i> The call are time boxed for 30 mins.</li>
                            <li><i class="fa fa-check"></i> Email support for 6 months</li>
                            <li><i class="fa fa-check"></i> Benefits of resume review, career advice, strategy for your automation project, any queries related to automation and software testing.</li>
                            <li><i class="fa fa-check"></i> Get help with setting career goals.</li>
                        </ul>
                    </div>
                    <div class="pricing-footer text-center col-lg-2">
                        <button class="btn btn-lg btn-teal btn-mw-150 border-radius-50 mentorshipJoinPlatinumBtn"><span class="h-7">JOIN NOW</span></button>
                        <h3 class="pricing-price ls-1 text-dark margin-top-1-25">$99.00</h3>
                    </div>
                </div>
                <!-- <div class="pricing-container pricing-container-flex text-center clearfix col-lg-12 col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-header pricing-header-1 bg-teal text-teal col-lg-4">
                        <div class="bg-pattern-1">
                            <h1 class="pricing-title text-white ls-1">ENTERPRISE</h1><span class="l-block h-6 text-white ls-1 margin-top-n-1-25">For Enterprise Use</span>
                        </div>
                    </div>
                    <div class="pricing-body bg-white col-lg-6">
                        <ul class="pricing-list col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0 text-left text-dark margin-bottom-0 h-7">
                            <li><i class="fa fa-check"></i> 1000+ Emails</li>
                            <li><i class="fa fa-check"></i> 500+ GB Space</li>
                            <li><i class="fa fa-check"></i> 100+ Domain</li>
                        </ul>
                        <ul class="pricing-list col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0 text-left text-dark margin-bottom-0 h-7">
                            <li><i class="fa fa-check"></i> 10+ TB Bandwidth</li>
                            <li><i class="fa fa-check"></i> 300+ Databases</li>
                            <li class="text-faded-gray"><i class="fa fa-check"></i> Enhanced Security</li>
                        </ul>
                    </div>
                    <div class="pricing-footer text-center col-lg-2">
                        <button class="btn btn-lg btn-teal btn-mw-150 border-radius-50"><span class="h-7">ORDER NOW</span></button>
                        <h3 class="pricing-price ls-1 text-dark margin-top-1-25">$69.99</h3>
                    </div>
                </div> -->
            </div>
        </div>

        <!--Sidebar Side-->
        <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <aside class="sidebar default-sidebar">
                <div class="sidebar-title"><h3>Testimonial</h3></div>
                <div class="sidebar-testimonial">
                    <div class="testimonial"><span class="icon flaticon-left-quotation-sign"></span>Worked as a Senior Quality Assurance engineer at a reputed MNC in New Jersey for last 8 years. I was a manual tester but I desperately wanted to get into automation project. So I took mentorship under Rahul who gave me a career plan and within 6 months, I landed into a project with the role of test automation engineer.<span class="icon flaticon-right-quotation-sign"></span></div>
                    <div class="row">
                        <!-- <div class="col-xs-4">
                            <img src="assets/images/resource/author-1.jpg" class="img-circle" alt="" />
                        </div> -->
                        <div class="col-xs-12 text-right">
                            <div class="overview">
                                <div class="name"><b>Leigha Marsh</b></div>
                                <div class="details">Senior Quality Engineer / Wells Fargo</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-testimonial">
                    <div class="testimonial"><span class="icon flaticon-left-quotation-sign"></span>I was struggling with landing a Job as a software automation engineer even though I had the required skills. I took a chance with live call where Rahul reviewed and suggested lot of modifications to my CV which I implemented. After these changes, I started lot of interview calls and landed a job within a month.<span class="icon flaticon-right-quotation-sign"></span></div>
                    <div class="row">
                        <!-- <div class="col-xs-4">
                            <img src="assets/images/resource/author-2.jpg" class="img-circle" alt="" />
                        </div> -->
                        <div class="col-xs-12 text-right">
                            <div class="overview">
                                <div class="name"><b>Stefan Burrows</b></div>
                                <div class="details">Test Analyst / BlueBerry</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-testimonial">
                    <div class="testimonial"><span class="icon flaticon-left-quotation-sign"></span>I wanted to transition from manual testing to SDET role. I joined Rahul's long term mentorship program where he shared me a details career plan. He regularly reviews my progress and keeps me motivated in reaching my career goals. I have learned so much in last 3 months then I had learned by myself in last 5 years and all credit goes to Rahul Sir.<span class="icon flaticon-right-quotation-sign"></span></div>
                    <div class="row">
                        <!-- <div class="col-xs-4">
                            <img src="assets/images/resource/author-3.jpg" class="img-circle" alt="" />
                        </div> -->
                        <div class="col-xs-12 text-right">
                            <div class="overview">
                                <div class="name"><b>Ibraheem Burke</b></div>
                                <div class="details">Test Engineer / Amazon</div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

    </div>
</div>
<div class="modal fade text-center py-5 subscribeModal-lg"  id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="top-strip"></div>
                <a class="h2" href="#" target="_blank">Request for Mentorship</a>
                <!-- <h3 class="pt-5 mb-0 text-secondary">Newsletter</h3> -->
                <!-- <p class="pb-1 text-muted"><small>Mauris magna metus, dapibus nec turpis vel, commodo iacul viverra.</small></p> -->
                <div class="contact-form">
                    <form id="mentorshipForm">
                        <div class="row clearfix">
                            <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                <input type="text" id="name" name="name" value="" placeholder="Your Name*" required="required">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                <input type="text" id="email" name="email" value="" placeholder="Your Email*" required="required">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                <input type="text" id="mobile" name="mobile" value="" placeholder="Your Phone*" required="required">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 text-left">
                                        <input type="radio" id="serviceType" name="serviceType" value="bronze" /><label>Bronze</label>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 text-left">
                                        <input type="radio" id="serviceType" name="serviceType" value="platinum"/><label>Platinum</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" id="bio" placeholder="Your Bio"></textarea>
                            </div>

                            <!-- <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="file" id="resume" name="resume" value="" placeholder="Your Resume*" required="required">
                            </div>  -->

                            <div class="form-group col-md-12 col-sm-12 col-xs-12 text-left">
                                <input type="checkbox" id="agreeTerms" name="agreeTerms" value="" required="required">
                                <label>I accept that mentorship is a paid service.</label>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" id="form-submit" class="theme-btn btn-style-one">Send</button>
                            </div>

                        </div>
                    </form>
                </div>
                <p class="pb-1 text-muted"><small>Your email is safe with us. We won't spam.</small></p>
                <!-- <div class="bottom-strip"></div> -->
            </div>
        </div>
    </div>
</div>
<!-- <div class="modal fade" id="subscribeModal" role="dialog">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Modal Header</h4>
    </div>
    <div class="modal-body">
      <p>This is a large modal.</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div> -->
    <script>
        $(document).ready(function () {
            $('.mentorshipJoinBtn').on('click', function(e){
                $('#subscribeModal').modal('show');
            });
            $('.mentorshipJoinPlatinumBtn').on('click', function(e){
                window.location.href = "https://courses.rahulshettyacademy.com/p/mentorship-rahul-shetty";
            });

            $('#mentorshipForm').on('submit',function(e){
                e.preventDefault();
                var data = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    mobile: $('#mobile').val(),
                    stype: $('#serviceType').val(),
                    bio: $('#bio').val()
                }

                $('#mentorshipForm button[type="submit"]').text('Sending ...').attr('disabled');
                $.ajax({
                    type: "POST",
                    url: API + "mentorship-request",
                    data: data,
                    success: function(response) {
                        $('#mentorshipForm button[type="submit"]').text('Send').removeAttr('disabled');
                        if(response.success){
                            $('#subscribeModal').modal('hide');
                            $('#alertWrapper').find('.modal-body p').text('Thank you for submitting your mentorship application. We are reviewing your request and will get back to you soon.');
                            $('#alertWrapper').modal('show');
                        }
                    },
                    error: function(error) {
                        $('#form-submit').val('Log in').removeAttr('disabled');
                        $('.error').html(error);
                    }
                });
            });
        });
    </script>
@endsection

