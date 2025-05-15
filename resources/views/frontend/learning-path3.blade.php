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
                <h1 id="lp3">Test Architect/Senior QA Automation Engineer</h1>

                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;">This Path should be chosen if you want to be a Java Test Architect/ Senior QA Automation Engineer who build Solutions and implement Best Practices for any Software Project..</div>

                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold"> Below are the Must Skills any Test Architect should have as per 2020 Market.</div>

                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>Experience > 8 years at least</h4>
                        <ul class="list-style-lp">
                            <li>Knowledge on CI/CD (Continuous Integration /Continues Delivery) Process</li>
                            <li>Implementing CI/CD Build Pipelines for test Automation Projects</li>
                            <li>Extensive knowledge on Devops tools like Azure Devops, Jenkins, GIT, Maven, SSH ,Ansible.</li>
                            <li>In-depth knowledge on Programming and Design patterns to implement Best Coding practices in the Projects.</li>
                            <li>Knowledge on Various Test Automation Frameworks.</li>
                            <li>Ability to Integrate Databases to Test Automation Scripts for Data Integration.</li>
                            <li>Docker Knowledge.</li>
                            <li>AWS Cloud Concepts & ability to run tests on Cloud Platforms.</li>
                            <li>Ability to write Unit and Integration tests for Dev Code (Spring Boot & Angular, react etc).</li>
                        </ul>
                    </div>
                </div>

                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">At Rahul Shetty Academy We have a special learning Package which will make you expert on all above Skills from Scratch with real time use cases/Projects..</div>

                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>Below are the Courses included in Package </h4>
                        <ul class="list-style-lp list-course-style">
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 SDET/Test Architect Essentials – Road to Full Stack QA </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Devops Fundamentals with AWS + Learn Docker, CI/CD Pipelines + Ansible </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Azure Devops Fundamentals – CI/CD + Project Boards </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Spring Boot Fundamentals with Unit + Integration Testing (Mockito + MockMVC Framework). – <span class="highlight-course-text">Course release on Feb 2021</span> </li>
                        </ul>
                    </div>
                </div>
                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">Purchase this Package as 1 Bundle and start Your preparation to emerge as Powerful Test Architect/Lead with high pay salary Income. .</div>
                <br/><br/>
                <div class="row clearfix text-center">
                    <button class="btn btn-success enroll-now"><a href="{{$learningPath}}">Enroll Now</a></button>
                </div>
                <br/><br/>
            </div>
        </div>
    </div>
@endsection
