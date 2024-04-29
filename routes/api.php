<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\BpController;
use App\Http\Controllers\Api\v1\DietController;
use App\Http\Controllers\lol\V1\TestController;
use App\Http\Controllers\Api\v1\WeightController;
use App\Http\Controllers\Api\v1\GlucoseController;
use App\Http\Controllers\Api\v1\UserSlotController;
use App\Http\Controllers\Api\v1\AskDoctorController;
use App\Http\Controllers\Api\v1\Auth\LoginController;
use App\Http\Controllers\Api\v1\DoctorSlotController;
use App\Http\Controllers\Api\v1\UserServiceController;
use App\Http\Controllers\Api\v1\Auth\RegisterController;
use App\Http\Controllers\Api\v1\HealthProfileController;
use App\Http\Controllers\Api\v1\BodyTempretureController;
use App\Http\Controllers\Api\v1\Auth\DoctorLoginController;
use App\Http\Controllers\Api\v1\Auth\SocialLoginController;
use App\Http\Controllers\Api\v1\HealthTrackerReportController;
use App\Http\Controllers\Api\v1\DoctorsController;
use App\Http\Controllers\Api\v1\OverseasTreatmentController;
use App\Http\Controllers\Api\v1\ReportController;
use App\Http\Controllers\Api\v1\VaccineController;

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







Route::group(['prefix' => 'v1'], function () {
    Route::post('reg',                                          [RegisterController::class, 'action']);
    Route::post('login',                                        [LoginController::class, 'action']);
    Route::post('order-list',                                   [UserServiceController::class, 'index']);
    Route::post('status-change',                                [UserServiceController::class, 'statusChange']);
    Route::post('doctor/login',                                 [DoctorLoginController::class, 'action']);
    Route::post('slot-store',                                   [DoctorSlotController::class, 'index']);
    Route::post('slot-update',                                  [DoctorSlotController::class, 'update']);
    Route::get('slot-delete/{id}',                              [DoctorSlotController::class, 'delete']);
    Route::post('todaySlot',                                    [DoctorSlotController::class, 'todaySlot']);
    Route::post('allSlot',                                      [DoctorSlotController::class, 'allSlot']);
    Route::get('doctorlist',                                    [UserSlotController::class, 'doctorList']);
    Route::post('find-slot',                                    [UserSlotController::class, 'findSlot']);
    Route::post('slot-booking',                                 [UserSlotController::class, 'slotBooking']);
    Route::post('social-login',                                 [SocialLoginController::class, 'action']);
    Route::post('health-profile',                                 [HealthProfileController::class, 'store']);
    Route::post('get-health-profile',                                 [HealthProfileController::class, 'index']);
    Route::post('askdoctor-store',                                 [AskDoctorController::class, 'store']);
    Route::post('get-askdoctor',                                 [AskDoctorController::class, 'index']);
    Route::post('diet',                                 [DietController::class, 'index']);
    Route::post('diet-store',                                 [DietController::class, 'store']);
    Route::post('bp',                                 [BpController::class, 'index']);
    Route::post('bp-store',                                 [BpController::class, 'store']);
    Route::post('glucose',                                 [GlucoseController::class, 'index']);
    Route::post('glucose-store',                                 [GlucoseController::class, 'store']);
    Route::post('body-temperature',                                 [BodyTempretureController::class, 'index']);
    Route::post('body-temperature-store',                                 [BodyTempretureController::class, 'store']);
    Route::post('weight',                                 [WeightController::class, 'index']);
    Route::post('weight-store',                                 [WeightController::class, 'store']);
    Route::post('askdoctor-ans',                                 [UserServiceController::class, 'askdoctorans']);
    Route::post('report-health-tracker',                                 [HealthTrackerReportController::class, 'index']);
    Route::get('specialist',                                 [DoctorsController::class, 'specialist']);
    Route::get('specialist-doctors/{id?}',                                 [DoctorsController::class, 'specialistDoctors']);
    Route::get('doctor-details/{id}',                                 [DoctorsController::class, 'doctorDetails']);
    Route::post('overseas-treatment',                                 [OverseasTreatmentController::class, 'store']);
    Route::get('vaccine',                                 [VaccineController::class, 'index']);
    Route::post('vaccine/order',                                 [VaccineController::class, 'order']);
    Route::post('reports/store',                                 [ReportController::class, 'store']);
    Route::get('reports',                                 [ReportController::class, 'index']);

});





Route::get('/areamManagement', 'ApiController@areaManagement');
Route::get('/policestations', 'ApiController@policestations');
Route::get('/area', 'ApiController@areas');
Route::get('/hospitals', 'ApiController@hospitals')->name('api.hospitals');
Route::get('/bloodbanks', 'ApiController@bloodbanks')->name('api.bloodbanks');
Route::post('/bloodbanks/store', 'ApiController@bloodbankStore')->name('api.bloodbanks.store');
Route::post('/bloodbank-search', 'ApiController@bloodbankSearch')->name('api.bloodbank.search');
Route::get('/ambulances', 'ApiController@ambulances')->name('api.ambulances');
Route::post('/store/ambulance', 'ApiController@storeAmbulance')->name('api.store.ambulance');
Route::post('/store/virtuallab', 'ApiController@storeVirtuallab')->name('api.store.virtuallab');
Route::post('/store/overseastreatment', 'ApiController@storeOverseastreatment')->name('api.store.overseastreatment');
Route::get('/doctors', 'ApiController@doctors')->name('api.doctors');
Route::get('/vaccine/products', 'ApiController@vaccineProducts')->name('api.vaccine.products');
Route::post('/vaccine/products/order', 'ApiController@vaccineProductsOrder')->name('api.vaccine.products.order');
Route::get('/medicine', 'ApiController@medicine')->name('api.medicine');
Route::get('/brands', 'ApiController@brands')->name('api.brands');
Route::get('/health-tips', 'ApiController@healthTips')->name('api.health-tips');
