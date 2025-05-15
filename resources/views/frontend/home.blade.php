@extends('frontend.layout')
@section ('content')
    <!-- HOME -->
    <div style="position: relative;top: -125px;margin-bottom: -125px;">
        <div class="container-fluid">
            <div class="row">
                <!-- Carousel -->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active" style="height:460px">
                            <!-- <img src="assets/images/slide_image.jpg" alt="First slide"> -->
                            <img src="assets/images/qa_slide_new.png" alt="First slide">
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-6 text-left">
                                    <h2>
                                        <span>An Academy to <strong> Learn Earn &amp; Shine</strong>&nbsp; in your QA Career</span>
                                    </h2>
                                    <br>
                                    <h3>
                                        <span>World-class tutorials on Selenium, Rest Assured, Cypress, Appium, Postman, Cucumber, SoapUI, Playwright, Jmeter, Jira, and many more. Join our courses now to get the best job opportunity.</span>
                                    </h3>
                                    <br>
                                    <div class="">
                                        <a class="btn btn-theme btn-sm btn-min-block"
                                           href="https://courses.rahulshettyacademy.com/sign_up">JOIN NOW</a></div>
                                </div>
                            </div><!-- /header-text -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--Counter Section-->
        <section class="counter-section">
            <div class="auto-container">

                <div class="fact-counter-two">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box"><span class="icon flaticon-mortarboard-1"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="5000" data-stop="600000">600,000</span>
                                    <span class="plus-tag">+</span>
                                </div>
                                <h4 class="counter-title">Students</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box"><span class="icon flaticon-book-2"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="30">30</span>
                                    <span class="plus-tag">+</span>
                                </div>
                                <h4 class="counter-title">Courses</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box"><span class="icon flaticon-star-2"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="257000">257,000</span>
                                    <span class="plus-tag">+</span>
                                </div>
                                <h4 class="counter-title">Ratings</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box"><span class="icon flaticon-diploma"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="30">30</span>
                                    <span class="plus-tag">+</span>
                                </div>
                                <h4 class="counter-title">Projects</h4>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!--End Counter Section-->
        <section class="price-section" style="padding:50px 0 0 0;">
            <div class="auto-container">
                <!--Price Title-->
                <div class="price-title">
                    <h2><span>why we are</span> Leaders in market?!</h2>
                    <div class="row clearfix" style="font-weight:bold">
                        <div class="list-column col-md-6 col-sm-6 col-xs-12">
                            <ul class="list-style-two">
                                <li>The academy is led by Rahul Shetty, a Test evangelist and Test architect with over
                                    10+ years in the IT industry.
                                </li>
                                <li>Rahul Shetty is a pioneer and authority in software testing space.</li>
                                <li>He has taught over 300,000 students in 195 countries from across the world.</li>
                                <li>All our courses are based on Real Time Project based where you learn real skill
                                    which are readily transferable to your work project.
                                </li>
                                <li>Our courses are guaranteed to help you reach your career goals and develop your
                                    automation skills
                                </li>
                                <li>Life time access, Learn at your own pace and updates are Free for Life.</li>
                            </ul>
                        </div>
                        <div class="list-column col-md-6 col-sm-6 col-xs-12">
                            <ul class="list-style-two">
                                <li>Wide coverage of topics like Selenium, Appium, Cucumber BDD, Cypress, Protractor,
                                    RestAPI, SoapUI and JMeter etc.
                                </li>
                                <li>His mentorship program is most after in the software testing community with long
                                    waiting period.
                                </li>
                                <li>Once under his mentorship, you are preparing yourself for long term success with his
                                    expert guidance and support.
                                </li>
                                <li>Lot of companies have already benefited from our consulting services.</li>
                                <li>We are essentially a Full Stack QA consulting and Training company and we got you
                                    covered for your test implementation and training needs.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonial Section-->
        <section class="testimonial-section"
                 style="background-image:url({{ asset('assets/images/background/3.jpg') }});padding:30px 0px 60px;">
            <div class="container-fluid">
                <!--Sec Title-->
                <div class="sec-title centered light">
                    <h2>Our Students</h2>
                    <div class="text">See what our students say about us. We are proud to show some of best <br>
                        feedback with lot of love &amp; proud!!
                    </div>
                </div>
                <div class="two-item-carousel owl-carousel owl-theme">

                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content">
                                <!-- <div class="image-box"><img src="assets/images/resource/author-1.jpg" alt="" /></div> -->
                                <div class="quote-icon"><span class="icon flaticon-right-quotation-sign"></span></div>
                                <h4>Gruffydd Dickerson</h4>
                                <div class="designation">Student of software testing</div>
                                <div class="text">Guys,I was a Nervous newbie in this software testing few days ago, but
                                    by just completing my 50% course, I am now confident becoz of knowledge shared by
                                    Rahul shetty sir, that i will crack the job of Software Test Engineer. I was 0 in
                                    Technical field,but now i can say i have some rare knowledge which will help me to
                                    deal with my goals and challenges in testing. Trying my level best to explore more n
                                    more in testing due to CURIOSITY ABOUT SOFTWARE TESTING created in my mind by Rahul
                                    sir's Guidance.Thank You sir.
                                </div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content">
                                <!-- <div class="image-box"><img src="assets/images/resource/author-2.jpg" alt="" /></div> -->
                                <div class="quote-icon"><span class="icon flaticon-right-quotation-sign"></span></div>
                                <h4>Jesse Shepard</h4>
                                <div class="designation">student of selenium</div>
                                <div class="text">I am so glad I found the right course and the right instructor. The
                                    instructor is too good..knowledgeable and supportive. I always get replies on my
                                    queries within hours and that helps me become productive.And this shows the
                                    dedication of the instructor as well. Very commendable and exceptional and elaborate
                                    teaching.Studying this course has increased my confidence.
                                </div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content">
                                <!-- <div class="image-box"><img src="assets/images/resource/author-1.jpg" alt="" /></div> -->
                                <div class="quote-icon"><span class="icon flaticon-right-quotation-sign"></span></div>
                                <h4>Zubair Rowley</h4>
                                <div class="designation">Student of software testing</div>
                                <div class="text">Guys, I was a Nervous newbie in this software testing few days ago,
                                    but by just completing my 50% course, I am now confident becoz of knowledge shared
                                    by Rahul shetty sir, that i will crack the job of Software Test Engineer. I was 0 in
                                    Technical field, but now i can say i have some rare knowledge which will help me to
                                    deal with my goals and challenges in testing. Trying my level best to explore more n
                                    more in testing due to CURIOSITY ABOUT SOFTWARE TESTING created in my mind by Rahul
                                    sir's Guidance.Thank You sir.
                                </div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content">
                                <!-- <div class="image-box"><img src="assets/images/resource/author-2.jpg" alt="" /></div> -->
                                <div class="quote-icon"><span class="icon flaticon-right-quotation-sign"></span></div>
                                <h4>Sania Wynn</h4>
                                <div class="designation">student of selenium</div>
                                <div class="text">I am so glad I found the right course and the right instructor. The
                                    instructor is too good..knowledgeable and supportive. I always get replies on my
                                    queries within hours and that helps me become productive. And this shows the
                                    dedication of the instructor as well. Very commendable and exceptional and elaborate
                                    teaching.Studying this course has increased my confidence.
                                </div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Testimonial Section-->
		
		<!--Courses Section-->
        <section class="courses-section" style="padding-top:50px">
            <div class="container-fluid">
                <!--Sec Title-->
                <div class="sec-title clearfix">
                    <div class="pull-left">
                        <h2>Featured Courses</h2>
                    </div>
                    <div class="pull-right">
                        <div class="onoffswitch4 float-right">
                            <input type="checkbox" name="onoffswitch4" class="onoffswitch4-checkbox"
                                   id="myonoffswitch4">
                            <label class="onoffswitch4-label" for="myonoffswitch4">
                                <span class="onoffswitch4-inner"></span>
                                <span class="onoffswitch4-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <!--Courses Block-->
                <div id="courses-block" class="row clearfix">
                </div>
            </div>
            <div class="text-center"><a href="https://courses.rahulshettyacademy.com/courses"
                                        class="btn btn-primary view-all-courses-btn">VIEW ALL COURSES</a></div>
        </section>
        <!--End Courses Section-->

        <!--Instructor Section-->
        <!-- <section class="become-instructor">
          <div class="auto-container">
              <div class="instructor-inner">
                  <h2>Become A Instructor</h2>
                    <div class="text">Join our creative community to spread your skill over world</div>
                    <a href="#" class="theme-btn btn-style-three">Get Started Now</a>
                </div>
            </div>
        </section> -->
        <!--End Instructor Section-->

        <!--sponso<!- - rs style One- ->
        <section class="sponsors-style-one" style="">
          <div class="auto-container">
              <!- -Sponsors Carousel- ->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/4.png" alt=""></a></figure></li>
                </ul>
            </div>
        </section> -->
        <!--End Sponsors Style One-->
    </div>
@endsection

@section('page-style-files')
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
@stop

@section('page-js-files')
@stop

@section('page-js-script')
    <script>
        $(document).ready(function () {
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                // for mobile users..
                $('.navigation .dropdown').click(function(e){
                    e.preventDefault()
                    //$(this).siblings().addClass('hide');
                    var isVisible = $(this).find('.dropdown-menu:visible').length;
                    if(isVisible) {
                        $(this).find('.dropdown-menu').slideUp();
                    } else {
                        $(this).find('.dropdown-menu').slideDown();
                    }
                })
            }

            $.get( API + "course", function( data ) {

                for(var i = 0; i < data.length; i++){
                    course = data[i];
                    var html = '<div class="courses-block col-lg-3 col-md-4 col-sm-6 col-xs-12">';
                    var wrapper = '';
                    var isBundle = '';
                    var isfree = '';

                    if(course.isFree) {
                        isfree = '<li class="free"><a style="cursor:default">Free</a></li>';
                    } else {
                        isfree = '<li class="amountInRupee" *ngIf="'+course?.old_price+'"><a><del style="color:red"><span class="fa fa-rupee" style="color:red;margin:0px;text-decoration:line-through;"></span>'+
                            course.old_price+'</del></a></li><li class="amountInRupee"><a><span class="fa fa-rupee"></span>'+course.actual_price+'</a></li>';
                            if(course?.old_price_in_dollar){
                                isfree += '<li class="amountInDollar"><a><del style="color:red"><span class="fa fa-dollar" style="color:red;margin:0px;text-decoration:line-through;"></span> '+course.old_price_in_dollar+'</del></a></li>';
                            }
                        isfree += '<li class="amountInDollar"><a><span class="fa fa-dollar"></span>'+course.actual_price_in_dollar+'</a></li>';
                    }
                    if(course.isBundle) {
                        isBundle = '<div class="bundle-tag">Combo</div>';
                        wrapper = '<div class="row bundleUpperWrapper"><div class="col-xs-5"><i class="icon glyphicon glyphicon-education"></i>'+course.noOfCourses+'  Courses</div><div class="col-xs-7" style="text-align: right"><i class="icon fa fa-users"></i>'+course.userEnrolled+'  Students</div></div>';
                    } else {
                        wrapper = '<div class="author">'+course.author+'</div>';
                    }


                html += '<div class="inner-box"><div class="image"><a href="'+course.courseURL+'"><img src="'+course.imgURL+'" alt="'+course.name+'" /></a>';
                html += isBundle + '</div><div class="lower-content"><div class="upper-box">'+wrapper+'<h2><a href="'+course.courseURL+'">'+course.name+'</a></h2></div>'+
                    '<div class="lower-box text-right"><ul class="post-meta showPrice inDollar">'+isfree+'</ul></div></div></div></div>';

                    $("#courses-block").append(html);
                }

            }).fail(function(e) {
                console.log("error");
                console.log(e);
            });

            $("#myonoffswitch4").click( function(){
                if( $(this).is(':checked') ) {
                    $('.showPrice').removeClass('inDollar');
                } else {
                    $('.showPrice').addClass('inDollar');
                }
            });

            $('.two-item-carousel').owlCarousel({
                loop:true,margin:50,nav:true,slideSpeed: 200,autoplay: 1000,
                navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
                responsive:{0:{items:1},480:{items:1},768:{items:2},800:{items:2},1024:{items:2}}
            });
            $('.moving-card-carousel').owlCarousel({
                loop:true, margin:50, nav:false, smartSpeed: 700, autoplay: 5000, responsive:{
                    0:{items:1},480:{items:2},768:{items:3},800:{items:3},1024:{items:3}
                }
            });

        });
    </script>
@stop
