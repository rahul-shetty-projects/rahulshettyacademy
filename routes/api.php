<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['api']], function () {
    Route::get('/', function (Request $request) {
        return response()->json(['error' => false,'status' => 'Up and running ...']);
    });

    Route::get('/course', [APIController::class, 'getCourseAPI']);

    Route::post('/newsletter-subscription', [APIController::class, 'newsletterSubscription']);
    Route::post('/practice-project', [APIController::class, 'practiceProject']);
    Route::post('/validate-token', [APIController::class, 'validateToken']);
    Route::post('/mentorship-request', [APIController::class, 'mentorshipRequest']);
    Route::post('/consulting-subscription', [APIController::class, 'consultingSubscription']);
    Route::post('/consulting-form-submission', [APIController::class, 'consultingFormSubmission']);
    Route::post('/job-application', [APIController::class, 'jobApplication']);
    Route::post('/contact-form', [APIController::class, 'contactForm']);
});
