@extends('layouts.app')

@section('content')
@if(session('error'))
    <div class="alert bg-danger" role="alert">
        <em class="fa fa-minus-circle mr-2"></em> 
        {{ session('error') }}
        <a href="#" onclick="$(this).parents('.alert').hide()" class="float-right"><em class="fa fa-remove"></em></a>
    </div>
@elseif(session('msg'))
    <div class="alert bg-success" role="alert">
        <em class="fa fa-check-circle mr-2"></em> 
        {{ session('msg') }}
        <a href="#" onclick="$(this).parents('.alert').hide()" class="float-right"><em class="fa fa-remove"></em></a>
    </div>              
@endif
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form id="courseForm" enctype="multipart/form-data" action="{{ route('course.updateCourseForm', $course_info->s_no) }}" method="POST"> 
                {{ csrf_field() }} 
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="col-form-label" for="courseName">Name</label>
                        <input name="courseName" id="courseName" class="form-control" type="text" value="{{$course_info->course_name}}" required />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="col-form-label" for="courseURL">Course Link</label>
                        <input name="courseURL" id="courseURL" class="form-control" type="text" value="{{$course_info->course_link}}" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="col-form-label" for="courseImage">Course Image</label>
                        <input name="courseImage" id="courseImage" class="form-control" type="file" />
                    </div>
                    <div class="col-md-3">
                        <label class="col-form-label" for="">Preview</label>
                        <input name="courseImageOld" id="courseImageOld" class="form-control" value="{{$course_info->course_image}}" type="hidden" />
                        <a href="#" data-toggle="modal" data-target="#viewCourseImageModel" class="btn btn-secondary">View Image</a>
                    </div>
                    <div class="col-md-5">
                        <label class="col-form-label" for="authorName">Author</label>
                        <input name="authorName" id="authorName" class="form-control" type="text" value="{{$course_info->author_name}}" required/ >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="col-form-label" for="oldPrice">Old Price (in Rupee)</label>
                        <input name="oldPrice" id="oldPrice" class="form-control" type="text" value="{{$course_info->old_price}}" required/ >
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label" for="actualPrice">Actual Price (in Rupee)</label>
                        <input name="actualPrice" id="actualPrice" class="form-control" type="text" value="{{$course_info->actual_price}}" required/ >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="col-form-label" for="oldPriceInDollar">Old Price (in Dollar)</label>
                        <input name="oldPriceInDollar" id="oldPriceInDollar" class="form-control" type="text" value="{{$course_info->old_price_in_dollar}}" required/ >
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label" for="actualPriceInDollar">Actual Price (in Dollar)</label>
                        <input name="actualPriceInDollar" id="actualPriceInDollar" class="form-control" type="text" value="{{$course_info->actual_price_in_dollar}}" required/ >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="col-form-label" for="noOfCourses">No. of courses</label>
                        <input name="noOfCourses" id="noOfCourses" class="form-control" type="text" value="{{$course_info->no_of_courses}}" required/>
                    </div>
                    <div class="col-md-4">
                        <label class="col-form-label" for="userComments">No. of users commented</label>
                        <input name="userComments" id="userComments" class="form-control" type="text" value="{{$course_info->user_comments}}" required/>
                    </div>
                    <div class="col-md-4">
                        <label class="col-form-label" for="usersEnrolled">No. of users enrolled</label>
                        <input name="usersEnrolled" id="usersEnrolled" class="form-control" type="text" value="{{$course_info->user_enrolled}}" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="col-form-label" for="rate">Rate (out of 5)</label>
                        <input name="rate" id="rate" class="form-control" type="text" value="{{$course_info->rate}}" required/>
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label" for="courseOrder">order</label>
                        <input name="courseOrder" id="courseOrder" class="form-control" type="text" value="{{$course_info->course_order}}" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 float-left">                        
                        <label class="col-form-label" for="isFree">is Free ?</label>
                        <input name="isFree" id="isFree" {{ ($course_info->is_free) ? 'checked="1"' : '' }}  type="checkbox" />
                    </div>
                </div>  
                <div class="form-group row">
                    <div class="col-md-12 float-left">                        
                        <label class="col-form-label" for="isBundle">is Bundle ?</label>
                        <input name="isBundle" id="isBundle" {{ ($course_info->is_bundle) ? 'checked="1"' : '' }} type="checkbox" />
                    </div>
                </div> 
                <br/>  
                <div class="row float-right">
                    <button class="btn btn-primary btn-lg margin" type="submit"><span class="fa fa-plus"></span> &nbsp;Save</button>
                    <br/>
                </div>
            </form>
    </div>
    <div id="viewCourseImageModel" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Image Preview</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="{{ $course_info->course_image }}" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
