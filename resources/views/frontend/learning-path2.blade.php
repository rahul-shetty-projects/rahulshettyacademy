@extends('frontend.layout')
@section('page-style-files')
    <link href="{{ asset('assets/css/learning-path.css') }}" rel="stylesheet">
@stop
@section ('content')
    <?php
    $learningPath = 'https://courses.rahulshettyacademy.com/p/software-quality-assurance-engineer/';
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
                <h1 id="lp2">Software Quality Assurance Engineer </h1>
                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;">This Path should be chosen by the people who want to master all the core concepts of Software testing (Manual) with real time Projects.</div>
                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">Below are the Skills one should aware if they want to get into any QA Entry Roles or Switch their domain to QA Testing field </div>
                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>Experience – Freshers / 0 – 3 Year’s Experience : </h4>
                        <ul class="list-style-lp">
                            <li>What is Software Testing and its Principles?</li>
                            <li>How Testing happens in real time Projects. And day to day activities of the Tester</li>
                            <li>Complete Understanding on Manual Testing Concepts.</li>
                            <li>How Testing activities are Performed in Agile and Waterfall models.</li>
                            <li>Agile Scrum Terminologies and the Process followed.</li>
                            <li>Knowledge on Manual Test Management tools like Jira, Bugzilla, Quality Centre (ALM) etc.,</li>
                            <li>What are Webservices and understand the core concepts of WebServices and Rest API testing?</li>
                            <li>SQL Basics and thorough knowledge on SQL Syntaxes to interact with databases.</li>
                            <li>Identify Security flaws in applications with Security testing skills.</li>
                        </ul>
                    </div>
                </div>
                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">At Rahul Shetty Academy We have a special learning Package which will make you expert on all above Skills from Scratch with real time use cases/Projects.</div>
                <div class="row clearfix">
                    <div class="list-column col-md-12 col-sm-12 col-xs-12">
                        <h4>Below are the Courses included in Package </h4>
                        <ul class="list-style-lp list-course-style">
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Master Software Testing from Scratch with real time Examples </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Understand the Jira and Agile Scrum </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Learn SQL from Scratch </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 Web Security Testing essentials </li>
                            <li>
                                <span class="glyphicon glyphicon-ok tick-icon"></span>
                                 WebServices/API Testing with SoapUI + Real time Projects </li>
                        </ul>
                    </div>
                </div>
                <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;font-weight: bold">Purchase this Package as 1 Bundle and start Your preparation to emerge as QA Engineer with Strong foundation.</div>
                <br/><br/>
                <div class="row clearfix text-center">
                    <button class="btn btn-success enroll-now"><a href="{{$learningPath}}">Enroll Now</a></button>
                </div>
                <br/><br/>
            </div>
        </div>
    </div>
@endsection
