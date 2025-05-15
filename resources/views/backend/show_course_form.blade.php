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

            <form id="courseForm" enctype="multipart/form-data" action="{{ route('course.addCourseForm') }}" method="POST"> 
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="col-form-label" for="courseName">Name</label>
                        <input name="courseName" id="courseName" class="form-control" type="text" value="" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="col-form-label" for="courseURL">Course Link</label>
                        <input name="courseURL" id="courseURL" class="form-control" type="text" value="" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="col-form-label" for="courseImage">Course Image</label>
                        <input name="courseImage" id="courseImage" class="form-control" type="file" required/>
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label" for="authorName">Author</label>
                        <input name="authorName" id="authorName" class="form-control" type="text" value="" required/ >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="col-form-label" for="oldPrice">Old Price (in Rupee)</label>
                        <input name="oldPrice" id="oldPrice" class="form-control" type="text" value="" required/ >
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label" for="actualPrice">Actual Price (in Rupee)</label>
                        <input name="actualPrice" id="actualPrice" class="form-control" type="text" value="" required/ >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="col-form-label" for="oldPriceInDollar">Old Price (in Dollar)</label>
                        <input name="oldPriceInDollar" id="oldPriceInDollar" class="form-control" type="text" value="" required/ >
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label" for="actualPriceInDollar">Actual Price (in Dollar)</label>
                        <input name="actualPriceInDollar" id="actualPriceInDollar" class="form-control" type="text" value="" required/ >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="col-form-label" for="noOfCourses">No. of courses</label>
                        <input name="noOfCourses" id="noOfCourses" class="form-control" type="text" value="" required/>
                    </div>
                    <div class="col-md-4">
                        <label class="col-form-label" for="userComments">No. of users commented</label>
                        <input name="userComments" id="userComments" class="form-control" type="text" value="" required/>
                    </div>
                    <div class="col-md-4">
                        <label class="col-form-label" for="usersEnrolled">No. of users enrolled</label>
                        <input name="usersEnrolled" id="usersEnrolled" class="form-control" type="text" value="" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="col-form-label" for="rate">Rate (out of 5)</label>
                        <input name="rate" id="rate" class="form-control" type="text" value="" required/>
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label" for="courseOrder">order</label>
                        <input name="courseOrder" id="courseOrder" class="form-control" type="text" value="" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 float-left">                        
                        <label class="col-form-label" for="isFree">is Free ?</label>
                        <input name="isFree" id="isFree" class="" type="checkbox" />
                    </div>
                </div>  
                <div class="form-group row">
                    <div class="col-md-12 float-left">                        
                        <label class="col-form-label" for="isBundle">is Bundle ?</label>
                        <input name="isBundle" id="isBundle" class="" type="checkbox" />
                    </div>
                </div>  
                <br/>  
                <div class="row float-right">
                    <button class="btn btn-primary btn-lg margin" type="submit"><span class="fa fa-plus"></span> &nbsp;Save</button>
                    <br/>
                </div>
            </form>
    </div>
</div>
@endsection
