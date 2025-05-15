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
                <h1 id="lp5">SDET Automation Engineer – JavaScript</h1>
                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;">If your language of interest is javaScript, then below is the path you can start from scratch to learn and excel in your Automation Career.</div>
                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>For 2-5 Year’s Experience QA Folk’s-</h4>
                        <ul class="list-style-lp">
                            <li>JavaScript Basics from scratch with detailed understanding on OOPS Concepts and JS Objects Mechanism.</li>
                            <li>Understand Protractor JS Automation tool for Front End Automatio.</li>
                            <li>Understand TypeScript Basics to develop TypeScript based Automation.</li>
                            <li>Understand Cypress JS Automation tool for Front End and XHR/API Automation Testing.</li>
                        </ul>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>5 - 10 Years Experience - </h4>
                        <ul class="list-style-lp">
                            <li>After solid understanding on JavaScript for Front end Automation and API Testing, (Above 1- 4 points), Focus on Developing JavaScript Test Automation Frameworks for Protractor and Cypress using Node.js , Jasmine & Mocha Unit Testing Frameworks(You should work hard in this area for expertise) </li>
                            <li>Build JavaScript BDD Automation Framework Design from Scratch for Protractor and Cypress using Cucumber.</li>
                            <li>Get Familiarize with WebDriverIO Tool which has capability of Web and Mobile Automation.</li>
                        </ul>
                    </div>
                </div>
                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">At Rahul Shetty Academy You have a special learning Package which will make you JavaScript Test Automation expert on all above Skills from Scratch with real time use cases/Projects.</div>
                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>Below are the Courses included in Package </h4>
                        <ul class="list-style-lp list-course-style">
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 JavaScript Programming basics from Scratch </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Learn Protractor(Angular Testing) from scratch +Frameworks </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Cypress -Modern Automation Testing from Scratch + Framework </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                  WebDriverIO Tutorial for Web and Mobile Automation
                            </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                  Learn Postman for API Automation Testing with Javascript
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">Purchase this Package as 1 Bundle and start Your preparation for Powerful PYTHON -SDET Automation Engineer roles.</div>
                <br/><br/>
                <div class="row clearfix text-center">
                    <button class="btn btn-success enroll-now"><a href="{{$learningPath}}">Enroll Now</a></button>
                </div>
                <br/><br/>
            </div>
        </div>
    </div>
@endsection
