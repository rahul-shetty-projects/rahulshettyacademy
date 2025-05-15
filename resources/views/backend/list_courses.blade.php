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
        <div class="table-responsive">
            <table id="stockList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Course Order</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action </th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($courses_info as $course_info)
                    <tr>
                        <td>{{ $course_info->course_order }}</td>
                        <td>{{ $course_info->course_name }}</td>
                        <td>{{ $course_info->actual_price }}</td>
                        <td>
                            <a href="{{ route('course.editCourseForm',$course_info->s_no)}}" data-tooltip="tooltip" class="btn btn-primary" title="Edit" class="anchor-action" /><em class="fa fa-edit"></em>Edit</a>
                            <a href="#" onclick="myModalFunc(this)" data-toggle="modal" data-target="#deleteCourseModel" 
                            data-course-id="{{ $course_info->s_no }}" class="btn btn-danger"
                            data-tooltip="tooltip" title="Delete"><em class="fa fa-trash"></em>Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No users data found ..!</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <div id="deleteCourseModel" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form id="deleteMachineCodeForm" action="{{ route('course.deleteCourse') }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }} 
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmation</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Are you sure, want to delete?
                        <input name="courseId" id="courseId" hidden class="form-control" type="text">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger" id="deleteMachineCodeBtn">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function myModalFunc(target) {
            var getId = target.getAttribute('data-course-id');
            document.getElementById('courseId').value = getId;
        };
    </script>
</div>
@endsection