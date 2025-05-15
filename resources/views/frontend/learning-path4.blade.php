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
                <h1 id="lp4">SDET Automation Engineer – PYTHON</h1>
                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;">If your language of interest is Python, then this is the path you can start from scratch to learn and excel in your Automation Career.</div>
                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>For 2-5 Year’s Experience QA Folk’s- </h4>
                        <ul class="list-style-lp">
                            <li>Python Basics from scratch with detailed understanding on OOPS Concepts and list, Tuple, Dictionary data types</li>
                            <li>Start with Selenium- Python UI Automation and understand how to automate Web applications </li>
                            <li>Understand the API Core concepts with real use cases.</li>
                            <li>API Manual testing with various tools like Postman, RestClient etc.,</li>
                            <li>Basics of SQL.</li>
                        </ul>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>5 - 10 Years Experience - </h4>
                        <ul class="list-style-lp">
                            <li>After solid understanding on Python Selenium and API Testing, (Above 1- 5 points), Focus on Developing Python Test Automation Frameworks for Selenium and API Testing using Nose and PyTest Unit Testing Frameworks(You should work hard in this area for expertise)</li>
                            <li>Understand Python BDD Automation Framework Design from Scratch using PyTest-BDD and Cucumber Behave Frameworks.</li>
                            <li>Deep understanding on API Automation with Python Requests Library.</li>
                            <li>Knowledge on BackEnd Automation with Python which can pull data from Databases and Execute Batch Jobs on remote Servers ( AWS/GCP Servers).</li>
                        </ul>
                    </div>
                </div>

                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">At Rahul Shetty Academy You have a special learning Package which will make you Python Test Automation expert on all above Skills from Scratch with real time use cases/Projects.</div>

                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>Below are the Courses included in Package </h4>
                        <ul class="list-style-lp list-course-style">
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Python Programming Tutorial </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Selenium WebDriver with Python – Basics to Advanced + Frameworks </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Python API Automation Testing + Framework </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 BackEnd Automation testing with Python </li>
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
