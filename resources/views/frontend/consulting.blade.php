@extends('frontend.layout')

@section('page-style-files')
    <link href="{{ asset('assets/css/consulting.css') }}" rel="stylesheet">
@stop

@section ('content')
<section class="page-title" style="background-image:url(assets/images/background/3.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>Job Support</h1>
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

            <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-weight: 600;color: #555;">Are you struggling with solving specific automation use case or need help with kick starting automation for your project, we got the people and expertise to help you reach an important milestone of test automation following all the benchmarks and processes involved in a modern software development life-cycle.  Choose from one of our consulting packages below and have peace of mind at your work.</div>
            <!-- <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;">Do you find any difficulty in solving specific automation use case or We deliver our Consulting services essentially as a Short term and Long term support:
            </div> -->

            <div class="row" style="padding:25px">
                <!-- <div class="pricing-container gold-color pricing-container-flex text-center clearfix col-lg-12 col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-header pricing-header-1 bg-teal text-teal col-lg-4">
                        <div class="bg-pattern-1">
                            <h1 class="pricing-title text-white ls-1">GOLD</h1><span class="l-block h-6 text-white ls-1 margin-top-n-1-25">( For Short-term Use )</span>
                            <p class="text-center">This should be chosen if you or your team is blocked or need support in solving one specific Automation challenge in your project</p>
                        </div>
                    </div>
                    <div class="pricing-body bg-white col-lg-6">
                        <! -- <p class="text-left">This should be chosen if you or your team is blocked or need support in solving one specific Automation challenge in your project</p> - ->
                        <ul class="pricing-list col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0 text-left text-dark margin-bottom-0 h-7">
                            <li><i class="fa fa-check"></i> Dedicated Senior QA automation Engineer with 4 -10 Years of experience with Automation testing</li>
                            <li><i class="fa fa-check"></i> 2 live calls of 30mins allowed</li>
                            <li><i class="fa fa-check"></i> Max Email support for 30 days</li>
                            <li><i class="fa fa-check"></i> The Engineer will guide / implement to unblock your automation test script development using Selenium, RestAPI, Cypress, Protractor, Appium, SoapUI, Postman, and other open source solutions.</li>
                        </ul>
                        <! -- <ul class="pricing-list col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0 text-left text-dark margin-bottom-0 h-7">
                            <li><i class="fa fa-check"></i> 10 TB Bandwidth</li>
                            <li><i class="fa fa-check"></i> 30 Databases</li>
                            <li class="text-faded-gray"><i class="fa fa-check"></i> Enhanced Security</li>
                        </ul> - ->
                    </div>
                    <div class="pricing-footer text-center col-lg-2">
                        <button class="btn btn-lg btn-teal btn-mw-150 border-radius-50 consultingGetQuoteBtn"><span class="h-7">GET QUOTE</span></button>
                        <h3 class="pricing-price ls-1 text-dark margin-top-1-25"></h3>
                    </div>
                </div> -->
                <!-- <div class="pricing-container diamond-color pricing-container-flex text-center clearfix col-lg-12 col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-header pricing-header-1 bg-teal text-teal col-lg-4">
                        <div class="bg-pattern-1">
                            <h1 class="pricing-title text-white ls-1">DIAMOND</h1><span class="l-block h-6 text-white ls-1 margin-top-n-1-25">( For Long-term Use )</span>
                            <p class="text-center">This should be chosen if you or your team are looking for long term support for 3-6 months.</p>
                        </div>
                    </div>
                    <div class="pricing-body bg-white col-lg-6">
                        <! -- <p class="text-left">This should be chosen if you or your team are looking for long term support for 3-6 months.</p> - ->
                        <ul class="pricing-list col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0 text-left text-dark margin-bottom-0 h-7">
                            <li><i class="fa fa-check"></i> Dedicated Test Architect with 4 -10 Years of experience with Automation testing will be assigned.</li>
                            <li><i class="fa fa-check"></i> 2 live calls of 30mins per month allowed.</li>
                            <li><i class="fa fa-check"></i> Max Email support for 180 days</li>
                            <li><i class="fa fa-check"></i> The Engineers will guide your team in automation framework development</li>
                            <li><i class="fa fa-check"></i> Support your project in optimizing existing automation framework</li>
                            <li><i class="fa fa-check"></i> Will help in Automation Proof of Concept (POC) & Utilities development.</li>
                        </ul>
                        <! -- <ul class="pricing-list col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-left-0 padding-right-0 text-left text-dark margin-bottom-0 h-7">
                            <li><i class="fa fa-check"></i> 10+ TB Bandwidth</li>
                            <li><i class="fa fa-check"></i> 300+ Databases</li>
                            <li class="text-faded-gray"><i class="fa fa-check"></i> Enhanced Security</li>
                        </ul> - ->
                    </div>
                    <div class="pricing-footer text-center col-lg-2">
                        <button class="btn btn-lg btn-teal btn-mw-150 border-radius-50 consultingGetQuoteBtn"><span class="h-7">GET QUOTE</span></button>
                        <h3 class="pricing-price ls-1 text-dark margin-top-1-25"></h3>
                    </div>
                </div> -->
                <div class="form-column">

                    <!-- <h2>Send Message</h2> -->
                    <!-- <div class="text"></div> -->
                    <!--Contact Form-->
                    <div class="contact-form">
                        <form id="consultingForm">
                            <div class="row clearfix">

                                <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" name="username" id="username" value="" placeholder="Your Name*" required="required">
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" name="mobileno" id="mobileno" value="" placeholder="Your Mobile No.*" required="required">
                                </div>

                                <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                    <input type="email" name="email" id="email" value="" placeholder="Your Email*" required="required">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="requirements" id="requirements" placeholder="Please explain about your requirements/Assignments in not less than 100 words?*"></textarea>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>In which programming knowledge you want this assignment to be done?</label>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select name="input-programming-language" id="programming-language" required="required">
                                            <option value="" default="" selected="" style="display:none">-- Select Programming --</option>
                                            <option value="Java">Java</option>
                                            <option value="Javascript">Javascript</option>
                                            <option value="python">python</option>
                                            <option value="C#">C#</option>
                                            <option value="Type Script">Type Script</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>Can you share us working environment/code to troubleshoot the issue?</label>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 text-left">
                                                <input type="radio" id="sharing" name="sharing" value="yes" /><label>Yes</label>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 text-left">
                                                <input type="radio" id="sharing" name="sharing" value="no"/><label>No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-groupcol-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>What is your timezone?</label>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="row">
                                            <select name="input-timezone" id="timezone" required="required">
                                                <option value="" default="" selected="" style="display:none">-- Select timezone -- </option>
                                                <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                                <option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
                                                <option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
                                                <option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
                                                <option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
                                                <option value="America/Anchorage">(GMT-09:00) Alaska</option>
                                                <option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
                                                <option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
                                                <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                <option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                <option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
                                                <option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
                                                <option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                <option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
                                                <option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
                                                <option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
                                                <option value="America/Havana">(GMT-05:00) Cuba</option>
                                                <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                <option value="America/Caracas">(GMT-04:30) Caracas</option>
                                                <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                                <option value="America/La_Paz">(GMT-04:00) La Paz</option>
                                                <option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
                                                <option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
                                                <option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
                                                <option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
                                                <option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
                                                <option value="America/Araguaina">(GMT-03:00) UTC-3</option>
                                                <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                                <option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
                                                <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                                <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
                                                <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                                <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                                <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                <option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
                                                <option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
                                                <option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
                                                <option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
                                                <option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
                                                <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                <option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
                                                <option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
                                                <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                                <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                <option value="Asia/Gaza">(GMT+02:00) Gaza</option>
                                                <option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
                                                <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                <option value="Asia/Damascus">(GMT+02:00) Syria</option>
                                                <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                                <option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
                                                <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                <option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                <option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                <option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
                                                <option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                                <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                                <option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
                                                <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                                <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                                <option value="Australia/Eucla">(GMT+08:45) Eucla</option>
                                                <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                                <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                                <option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
                                                <option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
                                                <option value="Asia/Magadan">(GMT+11:00) Magadan</option>
                                                <option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
                                                <option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
                                                <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                                                <option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                <option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
                                                <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                                                <option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label>We may charge you on hourly basis based on the assignment complexity. Can you afford this?</label>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="row clearfix">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 text-left">
                                                <input type="radio" id="afford" name="afford" value="yes" /> <label>Yes</label>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 text-left">
                                                <input type="radio" id="afford" name="afford" value="no"/> <label>No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" class="theme-btn btn-style-one">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!--End Contact Form-->

                </div>
            </div>
        </div>

        <!--Sidebar Side-->
        <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <aside class="sidebar default-sidebar">
                <div class="sidebar-title"><h3>Testimonial</h3></div>
                <div class="sidebar-testimonial">
                    <div class="testimonial"><span class="icon flaticon-left-quotation-sign"></span>We have used Rahul's consulting services to setup test automation for our startup. We are building mobile payment wallet and automation is quite complex to achieve in the payment domain. We got a dedicated test managers and couple of engineers who helped the team building automation framework from scratch which is robust and quite dependable in catching regressions.<span class="icon flaticon-right-quotation-sign"></span></div>
                    <div class="row">
                        <!-- <div class="col-xs-4">
                            <img src="assets/images/resource/author-1.jpg" class="img-circle" alt="" />
                        </div> -->
                        <div class="col-xs-12 text-right">
                            <div class="overview">
                                <div class="name"><b>Atticus Estrada</b></div>
                                <div class="details">Delivery Lead / SkyNet</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-testimonial">
                    <div class="testimonial"><span class="icon flaticon-left-quotation-sign"></span>Thank you for your support, Rahul and team. Highly competent engineers and always at standby for any support.<span class="icon flaticon-right-quotation-sign"></span></div>
                    <div class="row">
                        <!-- <div class="col-xs-4">
                            <img src="assets/images/resource/author-2.jpg" class="img-circle" alt="" />
                        </div> -->
                        <div class="col-xs-12 text-right">
                            <div class="overview">
                                <div class="name"><b>Janice Irvine</b></div>
                                <div class="details">Project Manager / Verizon</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-testimonial">
                    <div class="testimonial"><span class="icon flaticon-left-quotation-sign"></span>I was tasked with developing protractor automation framework while I had zero knowledge about protractor and angular. Then I bought Gold consulting package and got all the issues sorted out as I got customized learning path and guidance towards building a successful automation framework.<span class="icon flaticon-right-quotation-sign"></span></div>
                    <div class="row">
                        <!-- <div class="col-xs-4">
                            <img src="assets/images/resource/author-3.jpg" class="img-circle" alt="" />
                        </div> -->
                        <div class="col-xs-12 text-right">
                            <div class="overview">
                                <div class="name"><b>Shivani Delarosa</b></div>
                                <div class="details">Test Manageer / TCS</div>
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
                <a class="h2" href="#" target="_blank">Request for Consulting</a>
                <!-- <h3 class="pt-5 mb-0 text-secondary">Newsletter</h3> -->
                <p class="pb-1 text-muted"><small> </small></p>
                <div class="contact-form">
                    <form id="form">
                        <div class="row clearfix">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="name" value="" placeholder="Your Name*" required="required">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="email" name="email" value="" placeholder="Your Email*" required="required">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                <input type="text" id="contactNo" name="contactNo" value="" placeholder="Your Mobile no.*" required="required">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                <input type="text" id="timezone" name="timezone" value="" placeholder="Your Timezone.*" required="required">
                            </div>
                            <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                <input type="text" id="city" name="city" value="" placeholder="Your City*" required="required">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 text-left">
                                        <input type="radio" id="serviceType" name="serviceType" value="short" /><label>Short term</label>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 text-left">
                                        <input type="radio" id="serviceType" name="serviceType" value="long" /><label>Long term</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea id="description" name="description" placeholder="Description"></textarea>
                            </div>
                            <!-- <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="file" id="resume" name="resume" value="" placeholder="Your Resume*" required="required">
                            </div> -->

                            <div class="form-group col-md-12 col-sm-12 col-xs-12 text-left">
                                <input type="checkbox" id="agreeTerms" name="agreeTerms" value="" required="required">
                                <label>I accept that consulting is a paid service.</label>
                            </div>

                            <div class= "form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" id="form-submit" class="theme-btn btn-style-one">Send</button>
                            </div>
                        </div>
                        <p class="pb-1 text-muted"><small>Your email is safe with us. We won't spam.</small></p>
                    </form>
                </div>
                <!-- <div class="bottom-strip"></div> -->
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.consultingGetQuoteBtn').on('click', function(e){
            $('#subscribeModal').modal('show');
        });

        $('#form').on('submit',function(e){
            e.preventDefault();
            if($('#name').val() == '' || $('#email').val() == ''){
                $('.error').html('Please fill all the fields');
                return;
            }
            $('.error').html('');
            var data = {
                name: $('#name').val(),
                email: $('#email').val(),
                mobile: $('#contactNo').val(),
                timezone: $('#timezone').val(),
                city: $('#city').val(),
                stype: $('#serviceType').val(),
                description: $('#description').val()
            }
            $('#form button[type="submit"]').text('Sending ...').attr('disabled');
            $.ajax({
                type: "POST",
                url: API + "consulting-subscription",
                data: data,
                // contentType: "text/plain; charset=utf-8",
                // dataType: "json",
                success: function(response) {
                    //debugger;
                    $('#form button[type="submit"]').text('Send').removeAttr('disabled');
                    if(response.success){
                        $('#subscribeModal').modal('hide');
                        $('#alertWrapper').find('.modal-body p').text('Thanks for your interest in our Consulting services. We are reviewing your request and will get back to you soon.');
                        $('#alertWrapper').modal('show');
                    }
                },
                error: function(error) {
                    $('#form-submit').val('Log in').removeAttr('disabled');
                    $('.error').html(error);
                }
            })


        });
        $('#consultingForm').on('submit',function(e){
            e.preventDefault();
            if($('#username').val() == '' || $('#email').val() == ''){
                $('.error').html('Please fill all the fields');
                return;
            }


            $('.error').html('');

            var data = {
                name: $('#username').val(),
                phone: $('#mobileno').val(),
                email: $('#email').val(),
                req: $('#requirements').val(),
                programmingLang: $('#programming-language').val(),
                sharing: $('#sharing').val(),
                timezone: $('#timezone').val(),
                afford: $('#afford').val()
            }

            $('#consultingForm button[type="submit"]').text('Sending ...').attr('disabled');
            $.ajax({
                type: "POST",
                url: API + "consulting-form-submission",
                data: data,
                success: function(response) {
                    $('#consultingForm button[type="submit"]').text('Send Message').removeAttr('disabled');
                    if(response.success){
                        //$('#subscribeModal').modal('hide');
                        $('#alertWrapper').find('.modal-body p').html('Help is on the way! <br/>we shall get back to you shortly.');
                        $('#alertWrapper').modal('show');
                    }
                },
                error: function(error) {
                    $('#form-submit').val('Log in').removeAttr('disabled');
                    $('.error').html(error);
                }
            })
            });
        });
</script>
@endsection
