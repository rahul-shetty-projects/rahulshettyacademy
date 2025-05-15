@extends('frontend.layout')
@section ('css')
    <style>
        #interview-material-container p {color:#333;font-weight: bold}
        #interview-material-container p strong {font-weight: bolder;}
        #interview-material-container p.im-para { font-size: 18px; }
        #interview-material-container p.im-para.red { color:#ec5252; }
        .blockquote-box{border: 1px solid;border-right:5px solid #E6E6E6;border-left: 5px solid #E6E6E6;margin-bottom:25px}
        .blockquote-box a{color:#555;}
        .blockquote-box .square{width:100px;min-height:50px;margin-right:22px;text-align:center!important;background-color:#E6E6E6;padding:20px 0}
        .blockquote-box.blockquote-success{border-color:#ec5252}
        .blockquote-box.blockquote-success .square{background-color:#5CB85C;color:#FFF}
        .blockquote-para {padding: 15px 20px;font-style: italic;}
        .blockquote-para .fa {    color: #29303b;font-size: 7px; padding: 0px 10px;font-style: none;}
    </style>
@endsection
@section ('content')
<section class="page-title" style="background-image:url('assets/images/background/3.jpg');">
    <div class="auto-container">
        <div class="inner-box">
            <h1>Documents request</h1>
        </div>
    </div>
</section>
<div id="interview-material-container" class="container" style="padding-top:50px; ">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p class="im-para">We are offering free assistance of providing <strong>Interview Questions/Resume Preparation/ Material</strong> to the enrolled Users of any Rahul Shetty Paid courses on any platform</p>
            <p class="im-para red">Please email us at <strong><a href="mailto:mentor@rahulshettyacademy.com">mentor@rahulshettyacademy.com</a></strong> with below template to receive response </p>
            <p class="im-para"><i>Note : This template needs to be strictly followed to send response. We will validate if you are real enrolled user before sending the resources needed.</i></p>
            <div class="linkWrapper blockquote-box blockquote-success clearfix">
                <!-- <h4 style="margin-top: 15px" class="linkLabel">
                    Tree conifer</h4> -->
                <p class="blockquote-para">
                    <i class="fa fa-square"></i> Name (Exact name as how you enrolled)<br/>
                    <i class="fa fa-square"></i> Website in which you have enrolled<br/>
                    <i class="fa fa-square"></i> Which course resources you need? Mention the exact title of the course name here (Only one course details should be given for one email)<br/>
                    <i class="fa fa-square"></i> What resources you need? At this time, we support only Interview Questions, Resume Prep, Materials
                </p>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
