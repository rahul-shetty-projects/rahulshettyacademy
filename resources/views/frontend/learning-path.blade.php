@extends('frontend.layout')
@section('page-style-files')
    <link href="{{ asset('assets/css/learning-path.css') }}" rel="stylesheet">
@stop
@section ('content')
@php
$learningId = '';
$heading = 'LEARNING PATHS';
@endphp
<script>
    // Access the array elements
    var jsPaths = <?php echo json_encode($paths); ?>;

    function filterLearningPaths(cl) {
        if(cl!=='all') {
            $('.learning-path-col').hide();
            $('.learning-path-col.generic, .learning-path-col.'+cl).show();

            $('.btn-custom-secondary.active').removeClass('active').find('span').addClass('glyphicon-minus').removeClass('glyphicon-ok');
            $('.btn-custom-secondary[data-id="'+cl+'"]').addClass('active');
            $('.btn-custom-secondary.active').find('span').addClass('glyphicon-ok').removeClass('glyphicon-minus');
        } else {
            $('.btn-custom-secondary.active').removeClass('active').find('span').addClass('glyphicon-minus').removeClass('glyphicon-ok');
            $('.btn-custom-secondary[data-id="'+cl+'"]').addClass('active').find('span').addClass('glyphicon-ok').removeClass('glyphicon-minus');
            $('.learning-path-col').show();
        }
    }

    function toSeoUrl(url) {
        return url.toString()               // Convert to string
            .normalize('NFD')               // Change diacritics
            .replace(/[\u0300-\u036f]/g,'') // Remove illegal characters
            .replace(/\s+/g,'-')            // Change whitespace to dashes
            .toLowerCase()                  // Change to lowercase
            .replace(/&/g,'-and-')          // Replace ampersand
            .replace(/[^a-z0-9\-]/g,'')     // Remove anything that is not a letter, number or dash
            .replace(/-+/g,'-')             // Remove duplicate dashes
            .replace(/^-*!/,'')              // Remove starting dashes
            .replace(/-*$/,'');             // Remove trailing dashes
    }

    function showLearningPath(event) {
        var getId = $(event).data('id');
        var getUnit = null;
        // Display the array elements
        for(var i = 0; i < jsPaths.length; i++){
            if(jsPaths[i]['lpid'] == getId) {
                getUnit = jsPaths[i];
            }
        }
        var numberMatches = getId.match(/(\d+)/);
        const courseName = this.toSeoUrl(getUnit.name);
        window.location = '/learning-path/'+numberMatches[0]+'/'+courseName;
    }
</script>
<section class="page-title" style="background-image:url(assets/images/background/3.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>{{$heading}}</h1>
        </div>
    </div>
</section>

<div class="container" style="padding-top:50px">
    <div class="row clearfix">
        <!--Content Side-->
        <div class="content-side col-xs-12">
            <div class="text" style="text-indent:25px;margin:10px;font-family: 'Montserrat', sans-serif;font-size: 18px;color: #444;">A Learning Path is a selection of courses tied together for learners to progress through, mastering a particular subject or program. It allows you to enroll multiple users in multiple courses at once saving you valuable time.</div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 text-center filterButtons">
                    <a class="btn icon-btn btn-custom-secondary active" data-id="all" onclick="filterLearningPaths('all')">
                    <span class="glyphicon btn-glyphicon glyphicon-ok img-circle text-success">
                    </span>All
                    </a>
                    <a class="btn icon-btn btn-custom-secondary" data-id="javascript" onclick="filterLearningPaths('javascript')">
                    <span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-success">
                    </span>Javascript
                    </a>
                    <a class="btn icon-btn btn-custom-secondary" data-id="python" onclick="filterLearningPaths('python')">
                    <span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-success">
                    </span>Python
                    </a>
                    <a class="btn icon-btn btn-custom-secondary" data-id="java" onclick="filterLearningPaths('java')">
                    <span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-success">
                    </span>Java
                    </a>
                </div>
            </div>
            <br/>
            <div class="row">
                @foreach($paths as $p)
                    <div class="col-sm-4 learning-path-col {{ $p['category'] }}">
                        <div class="card learning-path-list-item ">
                            <div class="card-image">
                                <a onclick="showLearningPath(this)" data-id="{{ $p['lpid'] }}">
                                    <img class="img-responsive" src="{{ $p['imageURL'] }}">
                                </a>
                                <span class="card-title">{{ $p['category'] }}</span>
                            </div>
                            <div class="card-content">
                                <h4>
                                    <a onclick="showLearningPath(this)" data-id="{{ $p['lpid'] }}">{{ $p['name'] }}</a>
                                </h4>
                                <p class="description">
                                    {{ Str::limit($p['description'], 100) }}
                                    <a onclick="showLearningPath(this)" data-id="{{ $p['lpid'] }}" class="know-more-link">Know more</a>
                                </p>
                            </div>
                            <div class="card-action">
                                <span>
                                    <i class="icon glyphicon glyphicon-time"></i>
                                    {{ $p['hours'] }} hours</span><br/>
                                    <span class="course-block">
                                    <a onclick="showLearningPath(this)" data-id="{{ $p['lpid'] }}">
                                        <i class="icon glyphicon glyphicon-education"></i>
                                        {{ $p['noOfCourses'] }} courses <i class="icon glyphicon glyphicon-chevron-up" style="font-size: 10px;margin-left: 6px;"></i>
                                        <div class="popover-box">
                                            <ul>
                                                @foreach($p['courseList'] as $courseName)
                                                <li><i class="icon glyphicon glyphicon-pushpin" style="color: #501cce;"></i>
                                                    {{$courseName}}
                                                </li>
                                                @endforeach
                                            </ul>

                                        </div>
                                    </a>
                                </span>
                                <a target="_blank" href="{{$p['pathURL']}}" class="btn btn-success enroll-now">Enroll</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!--Sidebar Side-->
    </div>
</div>
@endsection
