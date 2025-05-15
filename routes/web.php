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
    return view('frontend.home')->with(
        [
            'route'  => 'home',
            'title'  => 'Selenium, API Testing, Software Testing & More QA Tutorials  | Rahul Shetty Academy',
            'description' => 'World-class tutorials on Selenium, Rest Assured, Cypress, Appium, Postman, Cucumber, SoapUI, Playwright, Jmeter, Jira, and many more. Join our courses now to get the best job opportunity.'
        ]);
});
Route::get('/lifetime-access', function () {
    return view('frontend.lifetime-access')->with(
        [
            'route'  => 'lifetime-access',
            'title'  => 'Lifetime Access Subscription to  30+ QA Automation Courses | Rahul Shetty Academy',
            'description' => 'One single subscription gives you Unlimited Lifetime Access to all Software Testing courses.  Check out our Bronze, Silver, and Platinum Plans and access all you need to land your dream.'
        ]);
});
Route::get('/learning-path', function () {
    return view('frontend.learning-path')->with(
        [
            'paths'  => json_decode(file_get_contents(resource_path('json/paths.json')), true),
            'route'  => 'learning-path',
	    'title'  => 'Lifetime Access Subscription to  30+ QA Automation Courses | Rahul Shetty Academy',
            'description' => 'One single subscription gives you Unlimited Lifetime Access to all Software Testing courses.  Check out our Bronze, Silver, and Platinum Plans and access all you need to land your dream.'
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
    return view('frontend.mentorship')->with(
        [
            'route'  => 'mentorship',
            'title'  => 'Get Best QA Career Guidance Mentorship from Rahul Shetty',
            'description' => 'At Rahul Shetty Academy, we offer two packages of the mentorship program, such as BRONZE For Short-term and PLATINUM For Long-term Use, as we believe that mentorship is a vital part of your overall career success.'
        ]);
});
Route::get('/consulting', function () {
    return view('frontend.consulting')->with(
        [
            'route'  => 'consulting',
            'title'  => 'Choose One Of Our Consulting Packages & Get Job Support| Rahul Shetty Academy',
            'description' => 'At Rahul Shetty Academy, our experts are always ready to help you with your project so that you can reach an important milestone of test automation by following all the benchmarks.'
        ]);
});
Route::get('/practice-project', function () {
    return view('frontend.practice-project')->with(
        [
            'route'  => 'practice-project',
            'title'  => 'Improve Your Skill - Use our Practice Sites & Apps for your QA Automation  | Rahul Shetty Academy',
            'description' => 'One stop Shop to practice Web, Mobile & API Automation with the Practice Projects used in our Selenium, Cypress, API Testing, Appium, Playwright Courses'
        ]);
});
Route::get('/about-my-mission', function () {
    return view('frontend.about-my-mission')->with(
        [
            'route'  => 'about-my-mission',
            'title'  => 'About Us | Rahul Shetty Academy',
            'description' => 'Rahul Shetty, a Test evangelist, and Test architect lead this academy with over 10+ years in the IT industry. Join our academy as we believe we are one-stop solutions for all your QA and Automation testing needs.'
        ]);
});
Route::get('/part-time-jobs', function () {
    return view('frontend.part-time-jobs')->with(
        [
            'route'  => 'part-time-jobs',
            'title'  => 'Avail Our Part Time Jobs / Freelancing Work | Rahul Shetty Academy',
            'description' => 'You can now earn part-time at Rahul Shetty Academy. Connect with us by filling up the form with all details and get informed.'
        ]);
});
Route::get('/contact-us', function () {
    return view('frontend.contact-us')->with(
        [
            'route'  => 'contact-us',
            'title'  => 'Contact Us | Rahul Shetty Academy',
            'description' => 'For Courses Enquiry, Please Contact us with  filling up the given form.'
        ]);
});
Route::get('/privacy', function () {
    return view('frontend.privacy')->with(
        [
            'route'  => 'privacy',
            'title'  => 'Know Our Privacy Policy | Rahul Shetty Academy',
            'description' => 'Privacy Policy'
        ]);
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
