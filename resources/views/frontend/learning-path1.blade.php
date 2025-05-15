@extends('frontend.layout')
@section('page-style-files')
    <link href="{{ asset('assets/css/learning-path.css') }}" rel="stylesheet">
@stop
@section ('content')
    <?php
    $learningPath = 'https://courses.rahulshettyacademy.com/p/java-sdet-automation-package-web-api-mobile-automation/';
    $title = 'Learning Path Detail';
    ?>
    <section class="page-title" style="background-image:url(assets/images/background/3.jpg);">
        <div class="auto-container">
            <div class="inner-box">
                <h1>{{$title}}</h1>
            </div>
        </div>
    </section>

    <div class="container" style="padding-top:50px">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-xs-12">
                <a href="/learning-path" class="back-to-link">&lt;&lt; Back to Learning Path list</a>
            </div>

            <div class="lp-wrapper content-side col-xs-12">
                <h1 id="lp1">SDET Automation Engineer – JAVA </h1>
                <div class="text"
                     style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;">
                    If your language of interest is Java, then this is the path you can start from scratch to learn and
                    excel in your QA Automation Career.
                </div>
                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>For 2-4 Year’s Experience QA Folk’s-</h4>
                        <ul class="list-style-lp">
                            <li>Core Java Basics with detailed understanding on OOPS Concepts.</li>
                            <li>Start with Selenium- Java UI Automation and understand how to automate Web
                                applications.
                            </li>
                            <li>Understand the API Core concepts with real use cases.</li>
                            <li>API Manual testing with various tools like Postman, Soap UI etc.</li>
                            <li>Basics of SQL.</li>
                        </ul>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>For 3- 7 Years Experience -</h4>
                        <ul class="list-style-lp">
                            <li>After solid understanding on Selenium and API Testing, (Above 1- 5 points) Focus on
                                Developing Test Automation Frameworks for Selenium and API Testing with Java using
                                TestNG/Junit, Maven, Cucumber (You should work hard in this area for expertise)
                            </li>
                            <li> Understand Mobile Automation Testing with Appium and ability to design Framework for
                                Android and IOS Applications
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="text"
                     style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">
                    At Rahul Shetty Academy You have a special learning Package which will make you java Automation
                    expert on all above Skills from Scratch with real time use cases/Projects.
                </div>

                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>Below are the Courses included in Package </h4>
                        <ul class="list-style-lp list-course-style">
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                Core Java Tutorial
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                Selenium WebDriver with Java – Basics to Advanced + Frameworks
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                API Automation Testing with Rest Assured + Frameworks
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                Mobile Automation Testing with Appium + Frameworks
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                Java SDET Automation Interview Kit (Top 200+ Questions with explanations)
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text"
                     style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">
                    Purchase this Package as 1 Bundle and start Your preparation for Powerful JAVA -SDET Automation
                    Engineer roles.
                </div>
                <br/><br/>
                <div class="row clearfix text-center">
                    <button class="btn btn-success enroll-now"><a href="{{$learningPath}}">Enroll Now</a></button>
                </div>
                <br/><br/>
            </div>
        </div>
    </div>
@endsection
