<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Image;
use Session;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.home',['page_title' => 'Home']);
    }

    /**
     * Show the course form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCourseForm()
    {
        return view('backend.show_course_form',['page_title' => 'Add Course']);
    }

    public function addCourseForm(Request $request)
    {
        $destinationPath = public_path().'/assets/images/courses/';
        if (($request->has('courseImage'))) {
            $file = $request->file('courseImage');
            $fileName = $file->getClientOriginalName();
            $storeName = $this->slug($request->input('courseName')).'_'.time().'_'.$fileName;
            $file->move($destinationPath, $storeName);
            $path = '/assets/images/courses/'.$storeName;/*config('app.url') . */
        }
        $is_free = $request->input('isFree') ? 1 : 0;
        $is_bundle = $request->input('isBundle') ? 1 : 0;
        $result = DB::table('courses_table')->insertGetId([
            'course_name' => $request->input('courseName'),
            'course_link' => $request->input('courseURL'),
            'course_image' => $path,
            'author_name' => $request->input('authorName'),
            'old_price' => $request->input('oldPrice'),
            'actual_price' => $request->input('actualPrice'),
            'old_price_in_dollar' => $request->input('oldPriceInDollar'),
            'actual_price_in_dollar' => $request->input('actualPriceInDollar'),
            'no_of_courses' => $request->input('noOfCourses'),
            'user_comments' => $request->input('userComments'),
            'user_enrolled' => $request->input('usersEnrolled'),
            'rate' => $request->input('rate'),
            'course_order' => $request->input('courseOrder'),
            'is_free' => $is_free,
            'is_bundle' => $is_bundle
        ]);

        return redirect()->back()->with('msg' , 'Course Created Successfully ...!');
    }

    public function listCourses()
    {
        // fetch all client_info_table
        $courses_info = DB::table('courses_table')
            ->select('*')
            ->paginate(20);
        return view('backend.list_courses',['page_title' => 'Courses List', 'courses_info' => $courses_info]);
    }

    public function editCourseForm($id)
    {
        $course_info = DB::table('courses_table')
            ->select('*')
            ->where('s_no',$id)
            ->get();
        return view('backend.edit_course_form',['page_title' => 'Edit Course', 'course_info' => $course_info[0]]);
    }

    public function updateCourseForm(Request $request, $id)
    {
        $destinationPath = public_path().'/assets/images/courses/';
        if (($request->has('courseImage'))) {
            $file = $request->file('courseImage');
            $fileName = $file->getClientOriginalName();
            $storeName = $this->slug($request->input('courseName')).'_'.time().'_'.$fileName;
            $file->move($destinationPath, $storeName);
            $path = '/assets/images/courses/' . $storeName;/*config('app.url') . */
        } else {
            $path = $request->input('courseImageOld');
        }
        $is_free = $request->input('isFree') ? 1 : 0;
        $is_bundle = $request->input('isBundle') ? 1 : 0;

        $result = DB::table('courses_table')->where('s_no',$id)->update([
            'course_name' => $request->input('courseName'),
            'course_link' => $request->input('courseURL'),
            'course_image' => $path,
            'author_name' => $request->input('authorName'),
            'old_price' => $request->input('oldPrice'),
            'actual_price' => $request->input('actualPrice'),
            'old_price_in_dollar' => $request->input('oldPriceInDollar'),
            'actual_price_in_dollar' => $request->input('actualPriceInDollar'),
            'no_of_courses' => $request->input('noOfCourses'),
            'user_comments' => $request->input('userComments'),
            'user_enrolled' => $request->input('usersEnrolled'),
            'rate' => $request->input('rate'),
            'course_order' => $request->input('courseOrder'),
            'is_free' => $is_free,
            'is_bundle' => $is_bundle
        ]);

        return redirect()->back()->with('msg' , 'Course Updated Successfully ...!');
    }

    public function deleteCourse(Request $request)
    {
        $courseId = $request->input('courseId');
        DB::table('courses_table')
                ->where('s_no',$courseId)
                ->delete();
        return redirect()->back()->with('msg' , 'Course Deleted Successfully ...!');
    }

    public function Slug($string)
    {
        return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    }
}
