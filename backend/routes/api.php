<?php

use App\Http\Controllers\auth\AdminAuthController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HeadlineController;
use App\Http\Controllers\magang\FilterController;
use App\Http\Controllers\magang\FormMagangController;
use App\Http\Controllers\magang\PendaftaranController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AchievmentsController;
use App\Http\Controllers\event_organizer\CategoryController;
use App\Http\Controllers\event_organizer\EventController;
use App\Http\Controllers\event_organizer\ParticipantController;
use App\Http\Controllers\event_organizer\PlaceController;
use App\Http\Controllers\event_organizer\RequestedEventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Auth Endpoint
Route::group(['prefix' => 'auth'], function () {
    // Student Auth
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'me']);
    Route::get('siswa', [AuthController::class, 'siswa']);

    // Admin Auth
    Route::post('admin/login', [AdminAuthController::class, 'login']);
    Route::post('admin/logout', [AdminAuthController::class, 'logout']);
    Route::get('admin/me', [AdminAuthController::class, 'me']);
});

// Authenticated Administrator Endpoint
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    // Web Content Endpoint
    Route::resource('news', NewsController::class)->only(['store', 'update', 'destroy']);
    Route::resource('achievements', AchievmentsController::class)->only(['store', 'update', 'destroy']);
    Route::resource('headline', HeadlineController::class)->only(['update']);
    Route::resource('banner', BannerController::class)->only(['store', 'update', 'destroy']);
    Route::get('banners', [BannerController::class, 'adminView']);
    Route::put('toggle/{id}', [BannerController::class, 'toggle']);

    // Magang Filter data endpoint
    Route::get('magang/filter', [FilterController::class, 'index']);
    Route::get('magang/filter/key', [FilterController::class, 'showByKey']);

    // Magang Endpoint
    Route::resource('magang', FormMagangController::class)->except(['store']);
    Route::post('magang', [FormMagangController::class, 'storeAdmin']);
    Route::resource('pendaftaran', PendaftaranController::class);
});

// Authenticated Student Endpoint
Route::group(['middleware' => 'siswa'], function () {
    // Magang Endpoint
    Route::get('magang/my-list', [FormMagangController::class, 'getByUsername']);
    Route::resource('magang', FormMagangController::class)->except(['destroy']);
    Route::resource('pendaftaran', PendaftaranController::class)->only(['index', 'show', 'store']);

    // For Download Student Card
    Route::group(['prefix' => 'card'], function () {
        Route::get('color', [AuthController::class, 'downloadColorCard']);
        Route::get('grayscale', [AuthController::class, 'downloadGrayscaleCard']);
    });
});

//Event Organizer Api
Route::group(['prefix' => 'event_organizer'],function(){
    Route::resource('category',CategoryController::class);
    Route::resource('place',PlaceController::class);
    //Events
    Route::get('userEvents',[EventController::class,'indexUser']);
    Route::resource('events',EventController::class);
    
    //Requested Events
    Route::resource('requested_events',RequestedEventController::class);
    Route::get('allRequestedEvent',[RequestedEventController::class,'getAll']);
    Route::post('actionEvent/{id}',[RequestedEventController::class,'actionEvent']);

    //Participant
    Route::resource('participant',ParticipantController::class);
    Route::post('getEventParticipant',[ParticipantController::class,'getEventParticipant']);
});

// Public Endpoint
Route::get('news', [NewsController::class, 'index']);
Route::get('news/{id}', [NewsController::class, 'show']);

Route::get('achievements', [AchievmentsController::class, 'index']);
Route::get('achievements/{id}', [AchievmentsController::class, 'show']);

Route::get('headline', [HeadlineController::class, 'index']);
Route::get('headline/{id}', [HeadlineController::class, 'show']);

Route::get('banner', [BannerController::class, 'index']);
Route::get('banner/{id}', [BannerController::class, 'show']);