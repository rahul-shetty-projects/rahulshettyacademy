<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
 * FRONT_END routes
 */
Route::get('/', function () {
    return view('frontend.home')->with('route', 'home');
});
Route::get('/lifetime-access', function () {
    return view('frontend.lifetime-access')->with('route', 'lifetime-access');
});
Route::get('/learning-path', function () {
    return view('frontend.learning-path')->with(
        [
            'paths'  => json_decode(file_get_contents(resource_path('json/paths.json')), true),
            'route'  => 'learning-path'
        ]);
});
Route::get('/learning-path/1/sdet-automation-engineer-java', function () {
    return view('frontend.learning-path1')->with('route', 'learning-path');
});
Route::get('/learning-path/2/software-quality-assurance-engineer', function () {
    return view('frontend.learning-path2')->with('route', 'learning-path');
});
Route::get('/learning-path/3/test-architectsenior-qa-automation-engineer', function () {
    return view('frontend.learning-path3')->with('route', 'learning-path');
});
Route::get('/learning-path/4/sdet-automation-engineer-python', function () {
    return view('frontend.learning-path4')->with('route', 'learning-path');
});
Route::get('/learning-path/5/sdet-automation-engineer-javascript', function () {
    return view('frontend.learning-path5')->with('route', 'learning-path');
});
Route::get('/mentorship', function () {
    return view('frontend.mentorship')->with('route', 'mentorship');
});
Route::get('/consulting', function () {
    return view('frontend.consulting')->with('route', 'consulting');
});
Route::get('/practice-project', function () {
    return view('frontend.practice-project')->with('route', 'practice-project');
});
Route::get('/about-my-mission', function () {
    return view('frontend.about-my-mission')->with('route', 'about-my-mission');
});
Route::get('/part-time-jobs', function () {
    return view('frontend.part-time-jobs')->with('route', 'part-time-jobs');
});
Route::get('/contact-us', function () {
    return view('frontend.contact-us')->with('route', 'contact-us');
});
Route::get('/privacy', function () {
    return view('frontend.privacy')->with('route', 'privacy');
});
Route::get('/documents-request', function () {
    return view('frontend.documents-request')->with('route', 'privacy');
});
// For local and dev env
Route::get('/course', function () {
    return response()->file(resource_path('json/courses.json'));
});


/*
 * BACK_END routes
 */
Auth::routes();

Route::prefix('rsadmin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/subscribers/list', [HomeController::class, 'listProjectSubscribers'])->name('home.listProjectSubscribers');
    Route::get('/subscribers/download', [HomeController::class, 'downloadSubscriberCSV'])->name('home.downloadSubscriberCSV');

    Route::get('/course/add', [CourseController::class, 'showCourseForm'])->name('course.showCourseForm');
    Route::get('/course/edit/{id}', [CourseController::class, 'editCourseForm'])->name('course.editCourseForm');
    Route::get('/course/list', [CourseController::class, 'listCourses'])->name('course.listCourses');

    Route::post('/course/add', [CourseController::class, 'addCourseForm'])->name('course.addCourseForm');
    Route::post('/course/edit/{id}', [CourseController::class, 'updateCourseForm'])->name('course.updateCourseForm');
    Route::delete('/course/edit', [CourseController::class, 'deleteCourse'])->name('course.deleteCourse');
});
