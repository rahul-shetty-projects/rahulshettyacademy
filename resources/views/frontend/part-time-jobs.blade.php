@extends('frontend.layout')
@section ('content')
<section class="page-title" style="background-image:url(assets/images/background/3.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>Part time Jobs</h1>
        </div>
    </div>
</section>

<div id="job-container" class="container">
    <div class="row">
        <div class="col-md-12">
            <p style="font-size:20px;font-weight:bold;font-family: 'Montserrat', sans-serif;margin: 20px 0px;">Do you
                have a Passion to showcase your Technical knowledge in the form of Teaching/ Writing QA Articles/
                Freelancing work and earn some Side income? If Yes then you are at the right place.</p>
        </div>
        <div class="contact-form form-column col-md-12 col-sm-12 col-xs-12">
            <div id="partTimeJobForm" class="select-dropdown-option">
                <div class="row clearfix">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label
                            style="font-size:20px;font-weight:bold;font-family: 'Montserrat', sans-serif;margin: 20px 0px;">Select
                            the Job you want to Apply</label>
                        <select name="select-jpb-type" id="select-job-type">
                            <option value="" default="" disabled="" selected=""> - Choose any -</option>
                            <option value="qaArticle">QA Automation Articles (Java/Python/JavaScript)</option>
                            <option value="Freelancing">Freelancing work for Automation Projects
                                (Java/Python/JavaScript)
                            </option>
                            <option value="onlineTrainer">Online Trainer for Automation courses
                                (Java/Python/JavaScript)
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12" style="margin-top: 35px;margin-bottom: 5px;">
                        <div class="linkWrapper blockquote-box blockquote-success clearfix" style="display: none;">
                            <div class="square pull-left">
                                <span class="glyphicon glyphicon-th-large glyphicon-lg"></span>
                            </div>
                            <h4 style="margin-top: 15px" class="linkLabel">
                                Tree conifer</h4>
                            <p class="linkGoogleDrive">
                                <a href="https://google.com" target="_blank">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                    ante.</a>
                            </p>
                        </div>
                    </div>
                    <!-- <div class="form-group col-md-12 col-sm-12 col-xs-12">
                      <div class="" style="display: none;font-weight: bold">
                        <p class="linkLabel">Some random content here</p>
                        <p class="linkGoogleDrive">
                          <a href="https://google.com" target="_blank">google drive link appear here</a>
                        </p>
                      </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#select-job-type').on('change', function () {
            var getValue, getLinkLabelText, getGoogleDriveLink, className;
            getValue = this.value;
            if (getValue == "qaArticle") {
                getLinkLabelText = "Please fill the Articles Job application form below link";
                getGoogleDriveLink = "https://docs.google.com/forms/d/e/1FAIpQLSdMoYEh2RkMhjVYnVzh1tu-oB8UROQIdfXzky1fTBd9pC9zaw/viewform";
                className = "blockquote-success";
            } else if (getValue == "Freelancing") {
                getLinkLabelText = "Please fill the Freelancing Job application form below link";
                getGoogleDriveLink = "https://docs.google.com/forms/d/e/1FAIpQLSd7qtXegRvx0kIE1nh686UCmZLB0ZcLQ4mbBfy36UrxvJGMOQ/viewform";
                className = "blockquote-warning";
            } else {
                getLinkLabelText = "Please fill the Trainer Job application form below link";
                getGoogleDriveLink = "https://docs.google.com/forms/d/e/1FAIpQLSdglIyQHlzRd56OvnNlxftG4LSyNNFtTmSnkWuIe5uMMQk1cg/viewform";
                className = "blockquote-danger";
            }
            $('.linkWrapper').removeClass('blockquote-success blockquote-warning blockquote-danger');
            $('.linkWrapper').addClass(className);
            $('.linkWrapper .linkLabel').text(getLinkLabelText);
            $('.linkWrapper .linkGoogleDrive a').text(getGoogleDriveLink).attr('href', getGoogleDriveLink);
            $('.linkWrapper').show();
        });
    });
</script>

@endsection
