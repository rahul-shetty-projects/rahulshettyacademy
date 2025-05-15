@extends('frontend.layout')
@section ('css')
<style>.about-us-para {	text-indent: 50px;margin: 20px 0px;	text-align: justify;	font-family: 'Montserrat', sans-serif;	color: #333;	font-size: 18px;}</style>
@endsection
@section ('content')
<section class="page-title" style="background-image:url('assets/images/background/3.jpg');">
    <div class="auto-container">
        <div class="inner-box">
            <h1>About Us</h1>
        </div>
    </div>
</section>

<div id="about-us-container" class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="about-us-para">Our motivation to start this Test Automation academy comes from our earnest desire to develop automation coding skills and testing tools knowledge to fresh graduates and existing QA professionals which will help them progress in their career, which in turn will lead to better software, low cost to the organization and better customer experience.</p>
        </div>
    </div>
    <div class="two-column row clearfix">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="image">
                <img src="assets/images/resource/working-man-pic.jpg" alt="">
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p class="about-us-para">The academy is led by Rahul Shetty, a Test evangelist and Test architect with over 10+ years in the IT industry. He has trained over 300,000 students from 195 countries across the world. On joining one of his courses, you are guaranteed to get massive value in the form of direct access to his high quality content targeted for both fresher’s and seasoned QA professionals. Any student who enrolls into our course gets Life time access and free updates for Life. Another reason we stand out from competitors is we provide live practice apps for all our courses and students can practice their new skills for unlimited times. Our courses are all real time project based and many of our students have got placed in top notch tech companies and have made big advances in their career path.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="about-us-para">Having tutored and guided thousands of students, Rahul Shetty is the most sought after person in the Software testing community. Anybody who is interested in leap frogging their career or want Rahul’s guidance in reaching their career goals can join his mentorship program. The biggest benefit of joining it is you get exclusive access to Rahul on a live call and Email support where you can have your resumes reviewed, interview tips and career advice for long term success.</p>

            <p class="about-us-para">We have also officially launched consulting services where individuals and companies can have access to our talent pool of talented test architects and automation engineers. Lot of companies have already benefited by using our services where we have helped them in Unblocking them in their automation challenges, developing automation strategy, test planning, automation framework, Utilities and Automation proof of concept. The benefit of working with our consultants is massive experience they carry having implemented complex automation projects from scratch in Fortune 500 companies. Ours is a Full Stack QA consulting where we have expert automation engineers for various technologies like Selenium, Appium, Protractor, RestAPI, SoapUI, Cypress, and Cucumber BDD.</p>

            <p class="about-us-para">We believe we are one stop solutions for all your QA and Automation testing needs where individuals and companies can grow using our expertise.</p>
        </div>
    </div>
</div>
@endsection

