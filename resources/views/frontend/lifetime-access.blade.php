@extends('frontend.layout')
@section ('content')

<link href="{{ asset('assets/css/life-time.css') }}" rel="stylesheet">
<section class="page-title" style="background-image:url(assets/images/background/3.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>All Access Subscription</h1>
        </div>
    </div>
</section>

<div class="container-fluid" style="padding-top:50px">
    <div class="row clearfix">

        <!--Content Side-->
        <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">

            <div class="text" style="text-align: center;color: #333;font-family: 'Montserrat';font-weight: bold;paddint-bottom:25px">
                <h2 style="padding-bottom: 25px;">Join <span style="color: #ec5252;">13,522</span> Happy Subscibers!</h2>
                <p style="font-size: 18px;font-family: 'Lato';">Get <strong style="font-weight: bolder;">Unlimited Life time Access</strong> to all Site wide (25 +) Courses with <strong style="font-weight: bolder;">one Single Subscription</strong>. And there is also flexibiity to gain free access to all future release courses as well</p>
                <p style="font-size: 18px;font-family: 'Lato';">Check out the below Plans and Access all the courses you need to land your dream QA Automation Job for a minimal one time fee</p>
            </div>
            <br/>
            <div class="table-responsive-lg">
                <table class="table table-striped pricing-table">
                    <thead>
                    <tr>
                        <th class="border-0 pb-5 h3 plan-content-title table-header" style="text-align: center;vertical-align: middle;"> Features</th>
                        <th class="text-center bronze-plan border-0 pb-5">
                            <h6 class="lead font-weight-bold pricing-plan-title">Bronze</h6>
                            <p class="font-weight-bold pricing-plan-amount">$ <span class="h1">99</span></p>
                            <p class="small pricing-plan-allotment">(₹ 7,000)</p>
                            <button onclick="gotoLifetimeAccessURL()" class="btn btn-block btn-outline-primary btn-rounded">ENROLL <span class="d-none d-md-inline"></span></button>
                        </th>
                        <th class="text-center silver-plan border-0 pb-5">
                            <h6 class="lead font-weight-bold pricing-plan-title">Silver</h6>
                            <p class="font-weight-bold pricing-plan-amount">$ <span class="h1">199</span></p>
                            <p class="small pricing-plan-allotment">(₹ 12,000)</p>
                            <button onclick="gotoLifetimeAccessURL()" class="btn btn-block btn-outline-primary btn-rounded">ENROLL <span class="d-none d-md-inline"></span></button>
                        </th>
                        <th class="text-center platinum-plan border-0 pb-5">
                            <h6 class="lead font-weight-bold pricing-plan-title">Platinum</h6>
                            <p class="font-weight-bold pricing-plan-amount">$ <span class="h1">299</span></p>
                            <p class="small pricing-plan-allotment"> (₹ 18,000)</p>
                            <button onclick="gotoLifetimeAccessURL()" class="btn btn-block btn-outline-primary btn-rounded">ENROLL <span class="d-none d-md-inline"></span></button>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            Life time Access to all 25 Published QA Automation / Certification Courses
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="border-0">Life time Access to all 25 Published QA Automation / Certification Courses</td>
                        <td class="border-0 text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                        <td class="border-0 text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                        <td class="border-0 text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            Access to all Future  Available Courses
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Access to all Future  Available Courses</td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            Life time Query Support
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Life time Query Support</td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            CareerGuidance/Planning assist from RahulShetty
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">CareerGuidance/Planning assist from RahulShetty</td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            Interview Preparation Assistance
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Interview Preparation Assistance</td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            Resume Preparation Assistance
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="border-bottom">Resume Preparation Assistance</td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            Access to Social Media Private testing groups
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="border-bottom">Access to Social Media Private testing groups</td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            All Live Online Trainings Free Admission
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="border-bottom">All Live Online Trainings Free Admission</td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            Projects & Assignments for Practice
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="border-bottom">Projects & Assignments for Practice</td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>
                    <tr class="mobile-responsive-row">
                        <td scope="row" class="border-0"></td>
                        <td class="border-0 text-center" colspan="3">
                            Certificate on Course Completion
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="border-bottom">Certificate on Course Completion</td>
                        <td class="text-center">
                                    <span class="text-danger">
                                        <i class="fa fa-times"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                        <td class="text-center">
                                    <span class="text-success">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <br/><br/>
            <div class="row clearfix text-center">
                <button onclick="gotoLifetimeAccessURL()" class="btn btn-success enroll-now">
                    Enroll Now
                </button>
            </div>
            <br/><br/>
            <!--Panel-->
            <div class="all-feature-card card">
                <h3 class="card-header light-blue lighten-1 white-text font-weight-bold text-center py-5">Here's what you get when you enroll in any Package </h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> 25+ comprehensive courses
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> 250+ hours of HD video
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> Real Time Projects / Use cases
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> Exercises and solutions
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> Downloadable source code
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> Learn at your own pace
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> Watch online or offline
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> Watch on any device
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> Certificate of completion
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> Interview preparation
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="glyphicon glyphicon-ok"></i></span> Resume Assistance
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <p class="text-small text-muted mb-0 pt-3">* At vero eos et accusamus et iusto ducimus.</p> -->
                </div>
            </div>
            <br/><br/>


        </div>

        <!--Sidebar Side-->
        <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <aside class="sidebar default-sidebar">
                <div class="sidebar-title"><h3>Testimonial</h3></div>
                <div class="sidebar-testimonial">
                    <div class="testimonial"><span class="icon flaticon-left-quotation-sign"></span>I had initially enrolled in Rahul's selenium course which gave me a premium learning experience and wanted to enroll more of his courses. My dream of becoming a full stack QA has become a reality thanks to the Platinum plan which gave me lifeaccess to all existing and new courses with host of other benefits. I feel great that there is always something new skills to learn from his courses and to advance in my career.<span class="icon flaticon-right-quotation-sign"></span></div>
                    <div class="row">
                        <!-- <div class="col-xs-4">
                            <img src="assets/images/resource/author-1.jpg" class="img-circle" alt="" />
                        </div> -->
                        <div class="col-xs-12 text-right">
                            <div class="overview">
                                <div class="name"><b>Shilpa Goyal</b></div>
                                <div class="details">Test Automation Engineer / Walmart</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-testimonial">
                    <div class="testimonial"><span class="icon flaticon-left-quotation-sign"></span>Rahul is not only a teacher but also a mentor and guide to me. His interview and Resume prepartion assistance was very beneficial in landing SDET position in a leading product based company.<span class="icon flaticon-right-quotation-sign"></span></div>
                    <div class="row">
                        <!-- <div class="col-xs-4">
                            <img src="assets/images/resource/author-2.jpg" class="img-circle" alt="" />
                        </div> -->
                        <div class="col-xs-12 text-right">
                            <div class="overview">
                                <div class="name"><b>Janice Irvine</b></div>
                                <div class="details">Sr. SDET / Intuit</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-testimonial">
                    <div class="testimonial"><span class="icon flaticon-left-quotation-sign"></span>From being a Manual tester for 5 years and then landing a job as senior automation engineer was possible only because I took selenium, restassured, jmeter, design patterns course as part of the Silver package. I'm really indebted to you for sharing your knowledge and I believe anyone taking life time subscription has QA career learning covered for lifetime.<span class="icon flaticon-right-quotation-sign"></span></div>
                    <div class="row">
                        <!-- <div class="col-xs-4">
                            <img src="assets/images/resource/author-3.jpg" class="img-circle" alt="" />
                        </div> -->
                        <div class="col-xs-12 text-right">
                            <div class="overview">
                                <div class="name"><b>Abdul Kalam</b></div>
                                <div class="details">QA Lead / Boeing</div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

    </div>
</div>
<script>
    function gotoLifetimeAccessURL() {
        return window.location.href = "https://courses.rahulshettyacademy.com/p/get-access-to-all-courses/";
    }
</script>
@endsection
