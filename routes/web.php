<?php

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

use App\DurationVaccine;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Resources\DurationVaccine as DurationResource;
use App\Models\DurationVaccine as ModelsDurationVaccine;
use Illuminate\Support\Facades\Route;

Route::get('/reboot',function(){
    return bcrypt('password');
     \Illuminate\Support\Facades\Artisan::call('config:cache');
     \Illuminate\Support\Facades\Artisan::call('cache:clear');
     \Illuminate\Support\Facades\Artisan::call('key:generate');
    // \Illuminate\Support\Facades\Artisan::call('migrate');
});

Route::get('/api',function(){
    $data = ModelsDurationVaccine::where("dieseas_id",1)->get();
    return new DurationResource($data);
});

Route::get("/iupdate","backend\InvoiceController@updateI");


/*
 *      ++++++++++++++++                                                  +++++++++++++++++
 *      ++++++++++++++++                                                  +++++++++++++++++
 *      ++++++++++++++++      Website All Route Start From here           +++++++++++++++++
 *      ++++++++++++++++                                                  +++++++++++++++++
 *      ++++++++++++++++                                                  +++++++++++++++++
 * */
//sharif Start Frontend
Route::get('/',[FrontEndController::class,'index'])->name('/');
Route::get('/service',[FrontEndController::class,'service'])->name('service');
Route::get('/about',[FrontEndController::class,'about'])->name('about');
Route::get('/team',[FrontEndController::class,'team'])->name('team');
Route::get('/gallery',[FrontEndController::class,'gallery'])->name('gallery');
Route::get('/blog',[FrontEndController::class,'blog'])->name('blog');
Route::get('/blog-right-sidebar',[FrontEndController::class,'blogRightSidebar'])->name('blog_right_sidebar');
Route::get('/blog-details',[FrontEndController::class,'blogDetails'])->name('blog_details');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');

Route::get('/ambulance',[FrontEndController::class,'ambulance'])->name('ambulance');
Route::get('/blood-bank',[FrontEndController::class,'bloodBank'])->name('blood_bank');
Route::get('/doctor-appoinment',[FrontEndController::class,'doctorAppoinment'])->name('doctor_appoinment');
Route::get('/turag',[FrontEndController::class,'healthProfile'])->name('turag');
Route::post('/health_profile_store',[FrontEndController::class,'health_profile_store'])->name('health_profile_store');

Route::get('/health-tips',[FrontEndController::class,'healthTips'])->name('health_tips');
Route::get('/hospital-information',[FrontEndController::class,'hospitalInformation'])->name('hospital_information');
Route::get('/medicine',[FrontEndController::class,'medicine'])->name('medicine');
Route::get('/overseas-treatment',[FrontEndController::class,'overseasTreatment'])->name('overseas_treatment');
Route::get('/vaccine',[FrontEndController::class,'vaccine'])->name('vaccine');
Route::get('/hospital-details/{id}',[FrontEndController::class,'hospitalDetails'])->name('hospital.details');

Route::get('/get-doctor',[FrontEndController::class,'getDoctor'])->name('getdoctor');
Route::post('/findslot',[FrontEndController::class,'findslot'])->name('findslot');
Route::get('/appoinment',[FrontEndController::class,'appoinment'])->name('appoinment');
Route::post('/booknow',[FrontEndController::class,'booknow'])->name('booknow');
Route::get('/confirmation',[FrontEndController::class,'confirmation'])->name('confirmation');


Route::get('/virtual-lab',[FrontEndController::class,'virtualLab'])->name('virtual_lab');
Route::get('/book-an-appointment',[FrontEndController::class,'bookAnAppointment'])->name('book_an_appointment');
Route::get('/doctor-profile',[FrontEndController::class,'doctorProdile'])->name('doctor_prodile');

//vertual lab
Route::post('/save_overseasTreatment',[FrontEndController::class,'saveOverseasTreatment'])->name('save_overseasTreatment');
// ambulance store
Route::post('/save_ambulance',[FrontEndController::class,'storeAmbulance'])->name('save_ambulance');

// VirtualLab
Route::post('/save_virtualLab',[FrontEndController::class,'virtualLabSave'])->name('save_virtualLab');

// Blood Bank
Route::post('/save_bloodBank',[FrontEndController::class,'saveBloodBank'])->name('save_bloodBank');


//sharif End Frontend
//
//Route::get('/', 'frontend\BasicController@index')->name('home.vaccine');
//Route::get('/doctor-list', 'frontend\BasicController@doctorlist')->name('home.doctors');
//Route::get('/doctor-profile/{id}', 'frontend\BasicController@doctorprofile')->name('home.doctorsprofile');
//Route::get('/all-products', 'frontend\BasicController@products')->name('home.shop');
//Route::get('/visit-dieseas-products/{id}', 'frontend\BasicController@DieseasProducts')->name('home.dieseasproduct');
//Route::get('/visit-product/{id}', 'frontend\BasicController@SingleProduct')->name('home.product-visit');
//
//Route::get('/about', 'frontend\BasicController@about')->name('home.about');
//Route::get('/service', 'frontend\BasicController@service')->name('home.service');
//Route::get('/visit-service/{id}', 'frontend\BasicController@serviceVisit')->name('home.servicedetails');
//Route::get('/contact','frontend\BasicController@contactus')->name('home.contact');
//Route::get('/profile','frontend\BasicController@profile')->name('home.profile');
//Route::get('/user-login','frontend\BasicController@login')->name('home.login');

/*
 *      ++++++++++++++++                                                 +++++++++++++++++
 *      ++++++++++++++++                                                 +++++++++++++++++
 *      ++++++++++++++++      Website All Route Start End here           +++++++++++++++++
 *      ++++++++++++++++                                                 +++++++++++++++++
 *      ++++++++++++++++                                                 +++++++++++++++++
 * */
/* Website All Route Start End here */

/* Android All Api Start */

Route::get('/alldieseas', 'backend\DieseasController@androidapi');

/* vaccine across dieseas name */

Route::get('/vaccine/{id}', 'backend\ProductController@androidapi');

/* hospital */

//Route::get('/allhospital', 'backend\HospitalController@androidapi');

Route::get('/allhospital', 'ApiController@androidapi');

Route::get('/about_us_description', 'ApiController@about_us_api');

Route::get('/hospital/department/{id}','ApiController@api_departmentOfHospital');

Route::get('hospital/department/doctor/{hospital_id}/{specialist_id}','ApiController@api_doctorsList');




/* hospital doctor -- ripon */

//Route::get('/hospital/{id}/doctor','backend\HospitalController@hospitalDoctor')->name('hospital.doctorapi');

/* Hospital Certification */

Route::get('/specialist/{hospital_id}', 'backend\ApiController@androidapispecialist');

/* Doctor accross to specialist name */

Route::get("/doctors/{designation}",'backend\DoctorController@doctorsdesignation');
Route::get("/doctors-list",'backend\DoctorController@androiddoctorlist');

/* Division Api */
Route::get('/alldivision','backend\DivisionController@androidapi');

/* Blood Bank Info according to Division */
Route::get('/bloodbank/{division_id}','backend\BloodBankController@androidapi');

/* Vaccine Duration  */
Route::get('/schedule/{dieseas_id}/{vaccine_id}','backend\DieseasController@vaccineschedule');

/* Vaccine according to Dieseas ID */
Route::get('/vaccinelist','backend\DieseasController@vaccinelist');

/* All Other Product Api*/
Route::get("/other-product",'backend\ProductController@otherproductapi');
Route::get("/android-other-product",'backend\OtherPurchaseController@otherpurapi');

/* Ambulance Api */
Route::get("/android-ambulance/{id}",'backend\AmbulanceController@androidambulance');

/*Pharmacy API*/
Route::get("/android-pharmacy",'backend\PharmacyController@androidpharmacy');

/*Corporate Clients */
Route::get('/corporate-client','ApiController@corporateclients');

/*corporate Program Api */
Route::get('corporate-program','ApiController@corporatePrograms');

Route::get('/all_users','ApiController@all_patients');
Route::get('/users/{id}','ApiController@get_pin');
/* Android All Api End */

/* visit applied all history with Information start */
Route::get("/qr-profile-info/{id}",'backend\PatientController@QrPatientAppliedHistory')->name('qr.patient');
/* visit applied all history with Information End */
Route::get('/warehouse','backend\WarehouseController@index')->name('warehouse.add');
Route::post('/store-warehouse','backend\WarehouseController@store')->name('warehouse.store');
Route::get('/warehouse/edit/{id}','backend\WarehouseController@edit')->name('warehouse.edit');
Route::post('/warehouse/erase','backend\WarehouseController@destroy')->name('warehouse.erase');
Route::post('/warehouse/update','backend\WarehouseController@update')->name('warehouse.update');

Route::get('/role','backend\RoleController@index')->name('role.add');
Route::post('/store-role','backend\RoleController@store')->name('role.store');
Route::get('/role/edit/{id}','backend\RoleController@edit')->name('role.edit');
Route::post('/role/erase','backend\RoleController@destroy')->name('role.erase');
Route::post('/update-role','backend\RoleController@update')->name('role.update');

Route::post('/save-register','backend\AdminController@store')->name('custom.register');


Auth::routes();

Route::get('/home', 'backend\AdminController@index')->name('home');
Route::post('/vaccine_stock','backend\AdminController@vaccine_stock')->name('vaccine_stock');
Route::post('/product_stock','backend\AdminController@product_stock')->name('product_stock');
Route::post('/dose_limit','backend\AdminController@dose_limit')->name('dose_limit');

Route::prefix('DieseasManagement')->group(function(){
    Route::get('/dieseas','backend\DieseasController@index')->name('dieseas.add');
    Route::post('/save-dieseas','backend\DieseasController@store')->name('dieseas.store');
    Route::get('/edit/{id}','backend\DieseasController@show')->name('dieseas.edit');
    Route::post('/erase','backend\DieseasController@destroy')->name('dieseas.destroy');
    Route::post('/update','backend\DieseasController@update')->name('dieseas.update');
    Route::get('/add-next-vaccine-duration','backend\DieseasController@vaccineduration')->name('dieseas.duration');
    Route::post('/duration-store','backend\DieseasController@durationstore')->name('dieseasduration.store');
    Route::get('/edit-vaccine-duration/{id}','backend\DieseasController@editvaccineduration')->name('dieseasduration.edit');
    Route::post('/update-vaccine-duration/{id}','backend\DieseasController@updatevaccineduration')->name('dieseasduration.update');
    Route::post('/vaccine-duration','backend\DieseasController@durationdestroy')->name('dieseasduration.destroy');
    Route::post('/find-vaccine','backend\DieseasController@findvaccine')->name('find.vaccinelist');
});

/* Vaccine Add start */

Route::prefix('ProductManagement')->group(function(){

    Route::get('/vaccine','backend\ProductController@index')->name('product.add');

    Route::post('/save-vaccine','backend\ProductController@store')->name('product.store');
    Route::get('/edit/{id}','backend\ProductController@show')->name('product.edit');
    Route::post('/erase','backend\ProductController@destroy')->name('product.destroy');
    Route::post('/update','backend\ProductController@update')->name('product.update');
    Route::get('/view','backend\ProductController@index')->name('product.view');
    Route::post('/product-find','backend\ProductController@findproduct')->name('product.find');
    Route::post('/product-find-value','backend\ProductController@findproductvalue')->name('product.findvalue');
    Route::post('/find-dose-product','backend\ProductController@product_dose')->name('vaccinedose.get');
    Route::get('/product-List','backend\ProductController@productlist')->name('productlist.get');

    Route::get('single-product/{id}','backend\ProductController@singeProductView')->name('product.singleview');
    Route::get('/product-order-list','backend\ProductController@productOrderList')->name('product.order.list');


    /* Other Product Start */

    Route::get('/other-product','backend\OtherProductController@index')->name('otherproduct.add');
    Route::get('/view-other-product','backend\OtherProductController@index')->name('otherpro.view');
    Route::post('/save-other-product','backend\OtherProductController@store')->name('otherproduct.store');
    Route::get('/edit-otherproduct/{id}','backend\OtherProductController@edit')->name('otherproduct.edit');
    Route::post('/update-otherproduct','backend\OtherProductController@update')->name('otherproduct.update');
    Route::post('/erase-otherproduct','backend\OtherProductController@destroy')->name('otherproduct.delete');

    /*pro find */

    Route::post('/find-otherproduct','backend\OtherProductController@product_find')->name('product.otherprofind');

    /* Other Product End */
});

Route::get('/health-profile','backend\HealthProfileController@index')->name('health.index');
Route::get('/health-tracker','backend\HealthTrackerController@index')->name('health.tracker');
Route::get('/health-tracker/report','backend\HealthTrackerController@report')->name('health.tracker.report');
Route::get('/health-tracker/show/{id}','backend\HealthTrackerController@show')->name('health-tracker.show');


/*Customer Management*/
Route::prefix('CustomerManagement')->group(function(){
    Route::get('/add-vaccine-applier','backend\SaleController@addapplier')->name('applier.add');
    Route::post('/store-vaccine-applier','backend\SaleController@storeapplier')->name('applier.store');
    Route::get('/edit-applier/{id}','backend\SaleController@editapplier')->name('applier.edit');
    Route::post('/update-applier','backend\SaleController@updateapplier')->name('applier.update');
});
/*Patient Management*/

Route::prefix('PatientManagement')->group(function(){
    /* Vaccine Apply Start */
//    Route::get('/add-vaccine-applier','backend\SaleController@addapplier')->name('applier.add');
//    Route::post('/store-vaccine-applier','backend\SaleController@storeapplier')->name('applier.store');
//    Route::get('/edit-applier/{id}','backend\SaleController@editapplier')->name('applier.edit');
//    Route::post('/update-applier','backend\SaleController@updateapplier')->name('applier.update');

    Route::get('/vaccie-apply','backend\VaccineApplyController@index')->name('vaccine.apply');
    Route::get('/bulk-vaccine-sale','backend\VaccineApplyController@bulkvaccine')->name('bulk.vaccine');

    Route::post('/getmrp','backend\VaccineApplyController@getMrp')->name('get.mrp');

    /* Vaccine Apply End */

//    /* Does List Start */
    Route::post("/list-of-vaccine-does",'backend\VaccineApplyController@getMrp')->name('vaccine.doeslist'); ///Problematic route
//    /* Does List End */
//
//
    /* Applied Information start */
    Route::post("/patient-applied-info","backend\VaccineApplyController@AppliedInfo")->name('applied.info');
    /* Applied Information End */





    /* Applied Information start */
    Route::post("/patient-applied-info","backend\VaccineApplyController@AppliedInfo")->name('applied.info');
    /* Applied Information End */

    /* Info with QR Code Start */
    Route::get("/applied-information/{id}",'backend\PatientController@PatientAppliedHistory')->name('patient.historyofapply');
    /* Info with QR Code End */

    Route::get('/patient','backend\PatientController@index')->name('patient.add');
    Route::get('/view','backend\PatientController@show')->name('patient.view');
    Route::post('/save-patient','backend\PatientController@store')->name('patient.store');
    Route::get('/edit/{id}','backend\PatientController@edit')->name('patient.edit');
    Route::post('/erase','backend\PatientController@destroy')->name('patient.destroy');
    Route::post('/update','backend\PatientController@update')->name('patient.update');


    /* Old Vaccine Applied History */
    Route::post('/old-history','backend\PatientController@appliedhistory')->name('vaccine.history');

    /* Vaccine Apply */
    Route::post('/apply-vaccine','backend\SaleController@store')->name('vaccine.applytocustomer');


    /* Show Vaccine Applied History for Customers*/
    Route::get('/applied-history','backend\SaleController@AppliedHistory')->name('patient.vaccinehistory');

    /* Ajax Vaccine Appliers Registration Start */
    Route::post('/ajax-save-patient','backend\PatientController@ajaxstore')->name('ajaxpatient.store');
    /*Route::post('/ajax-save-patient',function(\Illuminate\Http\Request $request){
        dd($request->all());
    });*/
    Route::get('/get-vaccineapplier-list','backend\PatientController@vaccineapplierlist')->name('vaccineapplier.get');
    /* Ajax Vaccine Appliers Registration End */

    Route::get('/sell-other-product','backend\SaleController@sellOtherProduct')->name('sell.other.product');
    Route::get('/sell-bulk-vaccine','backend\SaleController@bulkSellVaccine')->name('sell.bulk.vaccine');
    Route::post('/sell-bulk-vaccine','backend\SaleController@bulk_vaccine_sale_store')->name('sell.bulk.vaccine.store');
    Route::post('/product-stock-find','backend\SaleController@product_stock_find')->name('product.stock.find');
    Route::get('/health-product-invoice','backend\SaleController@sellOtherProduct')->name('health.product.invoice');


    /* Vaccine cart add */
    Route::post('/add-cart-otherproduct-sale','backend\SaleController@productaddcart')->name('otherpurchase.addCart');
    Route::post('/other-product-sale-cart-remove','backend\SaleController@CartsRemove')->name('otherpurchase.cart-remove');
    /* Vaccine cart End */

    Route::post('/find-otherproduct-sale','backend\SaleController@product_find')->name('product.otherproductfind');
    Route::post('/customer-search','backend\SaleController@customer_search')->name('customer.search');

    Route::post('/otherproduct-sale','backend\SaleController@sale_store')->name('othersale.store');

    Route::post('/get-product-price','backend\SaleController@getProductPrice')->name('otherproduct.price');

    Route::post('/store-sale-pending-list','backend\SaleController@storePendingSale')->name('sale.pendingList');
    Route::get('/get-sale-pending-list','backend\SaleController@pendingProduct')->name('pending.saleproduct');
    Route::post('/remove-item-from-pending-list','backend\SaleController@removeItemFromPendingList')->name('itemRemoveFromPendingList');

});

   /* Hospital Management*/

Route::prefix('HospitalManagement')->group(function(){

    Route::get('/hospital','backend\HospitalController@index')->name('hospital.add');
    Route::post('/hospital','backend\HospitalController@store')->name('hospital.store');
    Route::get('/edit/{id}','backend\HospitalController@show')->name('hospital.edit');
    Route::get('/hospital.destroy/{id}','backend\HospitalController@destroy')->name('hospital.destroy');
    Route::post('/update','backend\HospitalController@update')->name('hospital.update');
    Route::post('/erase','backend\HospitalController@destroy')->name('hospital.destroy');


});

Route::prefix('HealthTipstlManagement')->group(function(){

    Route::get('/healthtips','backend\HealthTipsController@index')->name('healthtips.add');
    Route::post('/healthtips','backend\HealthTipsController@store')->name('healthtips.store');
    Route::get('/edit/{id}','backend\HealthTipsController@show')->name('healthtips.edit');
    Route::post('/erase','backend\HealthTipsController@destroy')->name('healthtips.destroy');
    Route::post('/update','backend\HealthTipsController@update')->name('healthtips.update');

});



/* Blog Management Start */

Route::prefix('BlogManagement')->group(function (){
    Route::get("add-blog","backend\BlogController@index")->name('blog.add');
    Route::post("store-blog","backend\BlogController@store")->name('blog.store');
    Route::get("edit-blog/{id}","backend\BlogController@show")->name('blog.edit');
    Route::post("update-blog/{id}","backend\BlogController@update")->name('blog.update');
    Route::post("destroy-blog","backend\BlogController@destroy")->name('blog.destroy');
});

/* Blog Management End */

/* Certification Management*/

Route::prefix('CertificationManagement')->group(function(){

    Route::get('/certification','backend\CertificationController@index')->name('certification.add');
    Route::post('/certification','backend\CertificationController@store')->name('certification.store');
    Route::get('/edit/{id}','backend\CertificationController@show')->name('certification.edit');
    Route::post('/erase','backend\CertificationController@destroy')->name('certification.destroy');
    Route::post('/update','backend\CertificationController@update')->name('certification.update');

});


/* Sub-Certification Management*/

Route::prefix('SubCertificationManagement')->group(function(){

    Route::get('/sub-certification','backend\SubCertificationController@index')->name('subcertification.add');
    Route::post('/sub-certification','backend\SubCertificationController@store')->name('subcertification.store');
    Route::get('/edit/{id}','backend\SubCertificationController@show')->name('subcertification.edit');
    Route::post('/erase','backend\SubCertificationController@destroy')->name('subcertification.destroy');
    Route::post('/update','backend\SubCertificationController@update')->name('subcertification.update');
    Route::post('/get-sub-certification','backend\SubCertificationController@getsubcertification')->name('subcertification.request');


});


Route::prefix('DoctorManagement')->group(function(){

    Route::get('/doctor','backend\DoctorController@index')->name('doctor.add');
    Route::get('/all-doctor','backend\DoctorController@show')->name('doctor.view');

    Route::get('/doctor/slot','backend\DoctorSlotController@index')->name('doctor.slot.index');
    Route::post('/doctor/slot','backend\DoctorSlotController@store')->name('doctor.slot.store');
    Route::post('/slot-erase','backend\DoctorSlotController@destroy')->name('doctor.slot.destroy');



    /* doctor find start */

    Route::post("find-hospital-specialist","backend\DoctorController@findSpecialist")->name('doctor.findSpecialist');


    Route::post('/doctor','backend\DoctorController@store')->name('doctor.store');
    Route::post('/ajax-doctor','backend\DoctorController@ajaxstore')->name('doctor.ajaxstore');
    Route::get('/doctor-edit/{id}','backend\DoctorController@edit')->name('doctor.edit');
    Route::post('/erase','backend\DoctorController@destroy')->name('doctor.destroy');
    Route::post('/update','backend\DoctorController@update')->name('doctor.update');

    Route::get('/specialist','backend\SpecialistController@index')->name('specialist.add');
    Route::post('/store-specialist','backend\SpecialistController@store')->name('specialist.store');
    Route::get('/edit/{id}','backend\SpecialistController@show')->name('specialist.edit');
    Route::post('/erase-specialist','backend\SpecialistController@destroy')->name('specialist.destroy');
    Route::post('/update-specialist/{id}','backend\SpecialistController@update')->name('specialist.update');

    /* Doctor Profile Visit for Admin Panel Start */
    Route::get("admin-doctor-profile/{id}","backend\DoctorController@doctorProfile")->name('visitdoctor.profile');
    /* Doctor Profile visit for Admin Panel End*/

    /* Doctor List */

    Route::get('/Doctor-List','backend\DoctorController@doctorlist')->name('doctorlist.get');

    /* Doctor List End*/

});


/* Company Management*/

Route::prefix('CompanyManagement')->group(function(){

    Route::get('/company','backend\CompanyController@index')->name('company.add');
    Route::post('/company','backend\CompanyController@store')->name('company.store');
    Route::get('/edit/{id}','backend\CompanyController@show')->name('company.edit');
    Route::post('/erase','backend\CompanyController@destroy')->name('company.destroy');
    Route::post('/update','backend\CompanyController@update')->name('company.update');

});

/* Supplier*/

Route::prefix('SupplierManagement')->group(function(){

    Route::get('/supplier','backend\SupplierController@index')->name('supplier.add');
    Route::post('/supplier','backend\SupplierController@store')->name('supplier.store');
    Route::get('/edit/{id}','backend\SupplierController@show')->name('supplier.edit');
    Route::post('/supplier/erase','backend\SupplierController@destroy')->name('supplier.destroy');
    Route::post('/update','backend\SupplierController@update')->name('supplier.update');

    Route::post('/supplier-search','backend\SupplierController@suppliersearch')->name('supplier.search');

});

Route::prefix('Attendance')->group(function (){
    Route::get("attendance","backend\AttendanceController@index")->name('attendance.show');
    Route::post("show-attendance-report","backend\AttendanceController@reportAttendance")->name('attendance.report');

});


/* Supplier*/

Route::prefix('PurchaseManagement')->group(function(){

    Route::get('/purchase','backend\PurchaseController@index')->name('purchase.add');
    Route::get('/view-purchase','backend\PurchaseController@view')->name('purchase.view');
    Route::post('/save-purchase','backend\PurchaseController@store')->name('purchase.store');
    Route::get('/edit/{id}','backend\PurchaseController@show')->name('purchase.edit');
    Route::post('/supplier/erase','backend\PurchaseController@destroy')->name('purchase.destroy');
    Route::post('/update','backend\PurchaseController@update')->name('purchase.update');

    /* Other Product Purchase Start */
    Route::get('/add-other-pro-purchase','backend\OtherPurchaseController@index')->name('otherpurchase.add');
    Route::get('/view-other-product-purchase','backend\OtherPurchaseController@view')->name('otherpurchase.view');
    /* Other Product Purchase End */

    /* Vaccine cart add */
    Route::post('/add-cart','backend\PurchaseController@productaddcart')->name('purchase.addCart');
    Route::get('/add-bucketdata','backend\PurchaseController@Carts')->name('purchase.bucket');
    Route::get('/full-cart')->name('purchase.cart-edit');
    Route::get('/full-cart')->name('purchase.carts');
    Route::post('/product-cart-remove','backend\PurchaseController@CartsRemove')->name('purchase.cart-remove');
    /* Vaccine cart End */


    /* other product purchase start */
    Route::post('/save-otherpurchase','backend\OtherPurchaseController@store')->name('otherpurchase.store');
    /* Other product purchase end*/
    /* Vaccine cart add */
    Route::post('/add-cart-otherproduct','backend\OtherPurchaseController@productaddcart')->name('otherpurchase.addCart');
    Route::post('/other-product-cart-remove','backend\OtherPurchaseController@CartsRemove')->name('otherpurchase.cart-remove');
    /* Vaccine cart End */


});

/* Transfer Start */
Route::prefix('TransferManagement')->group(function (){
  //  Route::get('/vaccine-transfer','backend\TransferController@story')->name('vaccine.transfer');
    Route::get('/vaccine-transfer','backend\TransferController@index')->name('vaccine.transfer');
    Route::get('/vaccine-transfer-history','backend\TransferController@transferHistory')->name('vaccine.transfer.history');
    Route::post('/load_products','backend\TransferController@load_products')->name('load.products');
    Route::post('/load_qty','backend\TransferController@load_qty')->name('load.qty');
    Route::post('/transfer_product','backend\TransferController@transfer_product')->name('transfer.product');
    Route::get('/edit/{id}','backend\TransferController@edit')->name('product-transfer.edit');
    Route::patch('/update','backend\TransferController@update')->name('product-transfer.update');
    Route::post('/vaccine-transfer-report','backend\TransferController@showTransferHistory')->name('report.vaccine.history');
});

/* Transfer End */


Route::prefix('StockManagement')->group(function (){
    Route::get('/vaccine-stock','backend\StockController@index')->name('vaccinestock.view');

    Route::get('/view-other-product-stock','backend\StockController@OtherPro')->name('otherproduct.view');
    Route::get('/other-product-stock','backend\StockController@otherproduct')->name('otherproduct.info');
   // Route::post('/warehouse-search-vaccine-stock','backend\StockController@VaccineStock')->name('stock.vaccine');
    Route::post('/warehouse-search-vaccine-stock','backend\StockController@CustomVaccineStock')->name('stock.vaccine');
    /* vaccine search start */
    Route::post('/search-vaccine-stock','backend\StockController@VaccineSearch')->name('stock.search');
    /* vaccine search start */

    /* other-product search start */
    Route::post('/search-otherproduct-stock','backend\StockController@OtherProductSearch')->name('otherstock.search');
    Route::post('/search-product-stock','backend\StockController@ProductSearch')->name('product.stock.search');
    /* other-product search End */


});

Route::POST("api/android-post",function(){

    return "data";
});


Route::prefix('InvoiceManagement')->group(function(){
    Route::get('/all-purchase-report','backend\InvoiceController@index')->name('invoice.vaccineinovice');
    Route::get('/visit-vaccine-purchase-invoice/{id}','backend\InvoiceController@vaccineinvoice')->name('invoice.vaccinepurchase');
    Route::post('/sell-invoice/','backend\InvoiceController@sellinvoice')->name('sell.invoice');
    /* due invoices start */

    Route::get('/dueinvoice','backend\InvoiceController@dueinvoice')->name('invoice.dueinvoice');
    Route::post('/due-payment','backend\InvoiceController@duepayment')->name('invoice.duepayment');

    Route::post('/due-invoice-type','backend\InvoiceController@dueinvoicestype')->name('invoice.dueinvoice-type');

    Route::get('/all-dues','backend\InvoiceController@all_dues')->name('invoice.all-dues');
    Route::get('/partial-payment','backend\InvoiceController@partial_payment')->name('invoice.partial-payment');

    /* due invoices end */


    Route::get('/money-receipt','backend\InvoiceController@moneyreceipt')->name('invoice.money');
    Route::post('/money-reciept-list','backend\InvoiceController@CashPaidList')->name('cash.list');

    /* all purchase report start*/
    Route::get('/purchase-reports','backend\InvoiceController@all_purchase_report')->name('purchase.allreport');
    Route::post('/purchase-warehouse-report','backend\InvoiceController@purchase_warehouse_report')->name('purchase.warehouse_report');
    /* all purchase report end */

    /* Invoice Edit start */
    Route::get('invoice-edit/{id}','backend\InvoiceController@editInvoice')->name('invoice.edit');
    Route::post('invoice-update/{id}','backend\InvoiceController@updateInvoice')->name('invoice.update');
    /* Invoice Edit End */

    /* Money Receipt Print Start */
    Route::get('/money-receipt-print/{id}','backend\InvoiceController@moneyreceiptprint')->name('moneyrcept.print');

    /* Money Receipt Print End */
});

Route::prefix('ExpenseManagement')->group(function(){


    Route::get('/expense-management','backend\ExpenseController@index')->name('expense.add');
    Route::post('/expense-management','backend\ExpenseController@store')->name('expense.store');
   Route::get('/edit/{id}','backend\ExpenseController@show')->name('expense.edit');
    Route::post('/erase','backend\ExpenseController@destroy')->name('expense.destroy');
   Route::post('/update-expense','backend\ExpenseController@update')->name('expense.update');

    Route::get('/daily-expenses','backend\DailyExpenseController@index')->name('daily-expenses.add');
    Route::post('/daily-expenses','backend\DailyExpenseController@store')->name('daily-expenses.store');
    Route::get('/edit-daily/{id}','backend\DailyExpenseController@show')->name('daily-expenses.edit');
    Route::post('/erase-daily','backend\DailyExpenseController@destroy')->name('daily-expenses.destroy');
    Route::post('/update','backend\DailyExpenseController@update')->name('daily-expenses.update');


});

Route::prefix('DivisionManagement')->group(function(){
    Route::get('/division','backend\DivisionController@index')->name('division.add');
    Route::post('/division','backend\DivisionController@store')->name('division.store');
    Route::get('/edit/{id}','backend\DivisionController@show')->name('division.edit');
    Route::post('/erase','backend\DivisionController@destroy')->name('division.destroy');
    Route::post('/update','backend\DivisionController@update')->name('division.update');
});


Route::prefix('BloodBankManagement')->group(function(){
    Route::get('/bloodbank','backend\BloodBankController@index')->name('bank.add');

    Route::post('/save','backend\BloodBankController@store')->name('bank.store');
    Route::get('/view','backend\BloodBankController@view')->name('bank.view');
    Route::post('/erase','backend\BloodBankController@destroy')->name('bank.destroy');
    Route::get('/edit/{id}','backend\BloodBankController@show')->name('bank.edit');
    Route::post('/update-bloodbank','backend\BloodBankController@update')->name('bank.update');
});


Route::prefix('AmbulanceManagement')->group(function(){

    Route::get('/ambulance','backend\AmbulanceController@index')->name('ambulance.add');
    Route::post('/save','backend\AmbulanceController@store')->name('ambulance.store');
    Route::get('/view','backend\AmbulanceController@index')->name('ambulance.view');
    Route::post('/erase','backend\AmbulanceController@destroy')->name('ambulance.destroy');
    Route::get('/edit/{id}','backend\AmbulanceController@show')->name('ambulance.edit');
    Route::post('/update/{id}','backend\AmbulanceController@update')->name('ambulance.update');

});

Route::prefix('VirtuallabManagement')->group(function(){

    Route::get('/virtuallab','backend\VirtualLabController@index')->name('virtuallab.add');
    Route::post('/save','backend\VirtualLabController@store')->name('virtuallab.store');
    Route::get('/view','backend\VirtualLabController@index')->name('virtuallab.view');
    Route::post('/erase','backend\VirtualLabController@destroy')->name('virtuallab.destroy');
    Route::get('/edit/{id}','backend\VirtualLabController@show')->name('virtuallab.edit');
    Route::post('/update/{id}','backend\VirtualLabController@update')->name('virtuallab.update');

});

Route::prefix('OverseasTreatmentManagement')->group(function(){

    Route::get('/overseastreatment','backend\OverseasTreatmentController@index')->name('overseastreatment.add');
    Route::get('/overseastreatment','backend\OverseasTreatmentController@appOverseas')->name('overseastreatment');
    Route::post('/save','backend\OverseasTreatmentController@store')->name('overseastreatment.store');
    Route::get('/view','backend\OverseasTreatmentController@index')->name('overseastreatment.view');
    Route::post('/erase','backend\OverseasTreatmentController@destroy')->name('overseastreatment.destroy');
    Route::get('/edit/{id}','backend\OverseasTreatmentController@show')->name('overseastreatment.edit');
    Route::post('/update/{id}','backend\OverseasTreatmentController@update')->name('overseastreatment.update');

});


Route::prefix('PharmacyManagement')->group(function(){

    Route::get('/pharmacy','backend\PharmacyController@index')->name('pharmacy.add');
    Route::post('/save','backend\PharmacyController@store')->name('pharmacy.store');
    Route::get('/view','backend\PharmacyController@index')->name('pharmacy.view');
    Route::post('/erase','backend\PharmacyController@destroy')->name('pharmacy.destroy');
    Route::get('/edit/{id}','backend\PharmacyController@show')->name('pharmacy.edit');
    Route::post('/update','backend\PharmacyController@update')->name('pharmacy.update');

});



Route::prefix('WebsiteManagement')->group(function(){

    /* Service Start */
    Route::get('/service','backend\WebsiteController@index')->name('website.service');

    Route::post('/save-service','backend\WebsiteController@servicestore')->name('website.servicestore');
    Route::get('/edit-service/{id}','backend\WebsiteController@serviceedit')->name('website.serviceedit');
    Route::post('/service-erase','backend\WebsiteController@serviceDelete')->name('website.serviceDelete');
    Route::post('/service-update','backend\WebsiteController@ServiceUpdate')->name('website.serviceupdate');

    Route::get('/homepage-dynamic','backend\HomepageController@index')->name('homepage.add');
    Route::post('/homepage','backend\HomepageController@store')->name('homepage.store');
    Route::get('/edit/{id}','backend\HomepageController@show')->name('homepage.edit');
    Route::post('/erase','backend\HomepageController@destroy')->name('homepage.destroy');
    Route::post('/update/{id}','backend\HomepageController@update')->name('homepage.update');
    /* Service End */

    /* about us Start */
    Route::get('/add-aboutus','backend\WebsiteController@aboutus')->name('website.aboutus');
    Route::post('/save-aboutus','backend\WebsiteController@aboutusStore')->name('website.aboutstore');
    Route::get('/edit-about/{id}','backend\WebsiteController@aboutedit')->name('website.aboutedit');
    Route::post('/update-about','backend\WebsiteController@aboutUpdate')->name('website.aboutupdate');
    Route::post('/about-erase','backend\WebsiteController@aboutUpdate')->name('website.aboutDelete');

    /* Contact Us Start */
    Route::get('/add-contactus','backend\WebsiteController@contactus')->name('website.contactus');
    Route::post('/save-contactus','backend\WebsiteController@contactusStore')->name('website.contactstore');
    Route::get('/edit-contact/{id}','backend\WebsiteController@contactusedit')->name('website.contactusedit');
    Route::post('/update-contact','backend\WebsiteController@contactusUpdate')->name('website.contactupdate');
    Route::post('/contact-erase','backend\WebsiteController@contactusDelete')->name('website.contactusDelete');

    /* Contact Us End */
    /* about us End */

    /* banners Start */
    Route::get('/add-banner','backend\BannerController@index')->name('banner.add');
    Route::post('/save-banner','backend\BannerController@store')->name('banner.store');
    Route::get('/edit-banner/{id}','backend\BannerController@edit')->name('banner.edit');
    Route::post('/update-banner/{id}','backend\BannerController@update')->name('banner.update');
    Route::post('/delete-banner/{id}','backend\BannerController@destroy')->name('banner.delete');

    /* banners End */

});

Route::prefix('WebsiteManagement')->group(function() {
    Route::get('/Consults','backend\ConsultController@index')->name('consults.view');
    Route::post('/save-Consults','backend\ConsultController@store')->name('consults.store');
});



Route::prefix('ReportManagement')->group(function(){

    Route::get('/sale-report','backend\ReportController@index')->name('report.sale');
    Route::get('/report','backend\ReportController@allReport')->name('report');
    Route::get('/purchase-report','backend\ReportController@allPurchaseReport')->name('report.purchase');
    //Route::post('/show_report','backend\ReportController@finalCustomReport')->name('show_report');
    //Route::post('/show_report','backend\ReportController@show_report')->name('show_report');
    Route::post('/show_report','backend\ReportController@custom_show_report')->name('show_report');
    Route::post('/show_expense_report','backend\ReportController@show_expense_report')->name('show_expense_report');
    Route::post('/load_products','backend\ReportController@load_products')->name('load_products');
    Route::post('/load_expenses','backend\ReportController@load_expenses')->name('load_expenses');
    Route::get('/top-product-report','backend\ReportController@topProductReport')->name('report.topproduct');

    Route::get('/customer-supplier-report','backend\ReportController@customerSupplierReport')->name('report.customersupplier');
    Route::post('/load-customer-supplier-name','backend\ReportController@customerSupplierLoad')->name('report.customerSupplierLoad');
    Route::post('/show-customer-supplier-report','backend\ReportController@show_report_customerSupplier')->name('report.customerSupplier');
    Route::get('/product-sell-purchase-report','backend\ReportController@productSellPurchaseReport')->name('report.prductsellpurchase');
    Route::get('/profit-report','backend\ReportController@ProfitReport')->name('report.profit');
    Route::post('/net-profit-report','backend\ReportController@netProfitReport')->name('net-profit.report');
    Route::post('/show-net-profit-report','backend\ReportController@get_net_profit')->name('report.net-profit');
    Route::get('/office-expanses-report','backend\ReportController@OfficeExpenses')->name('report.expenses');
    /* search sale result */
    Route::post('/sale-search','backend\ReportController@SaleSearch')->name('report.salesearch');
    Route::get('/daily-profit-report','backend\ReportController@DailyProfitReport')->name('daily.report.profit');
    Route::post('/show-daily-profit-report','backend\ReportController@ShowDailyProfitReport')->name('show.daily.profit');
    Route::post('/load_products_daily_profit','backend\ReportController@load_products_daily_profit')->name('load.products');
    // Route::get('/income-statement','backend\ReportController@IncomeStatement')->name('income.statement');

});

Route::prefix('UserManagement')->group(function(){
    Route::get('/user-create','backend\UserController@index')->name('user.create');
    Route::post('/user-store','backend\UserController@store')->name('user.store');
    Route::get('/edit/{id}','backend\UserController@edit')->name('user.edit');
    Route::post('/erase','backend\UserController@destroy')->name('user.destroy');
    Route::post('/update-user/{id}','backend\UserController@update')->name('user.update');
    Route::get('/role-create','backend\RoleController@index')->name('role.create');
    Route::get('/role-view','backend\RoleController@view')->name('role.view');
    Route::post('/role-store','backend\RoleController@store')->name('role.store');
    Route::get('/role/edit/{id}','backend\RoleController@edit')->name('role.edit');
    Route::patch('/role/{id}/update','backend\RoleController@update')->name('role.update');
});

Route::prefix('AreaManagement')->group(function(){
    Route::get('/policestation','backend\PoliceStationController@index')->name('policestation.add');
    Route::post('/policestation','backend\PoliceStationController@store')->name('policestation.store');
    Route::get('/edit/{id}','backend\PoliceStationController@edit')->name('policestation.edit');
    Route::post('/erase','backend\PoliceStationController@destroy')->name('policestation.destroy');
    Route::post('/update','backend\PoliceStationController@update')->name('policestation.update');


    Route::get('/area','backend\AreaController@index')->name('area.add');
    Route::post('/area','backend\AreaController@store')->name('area.store');
    Route::get('area/edit/{id}','backend\AreaController@edit')->name('area.edit');
    Route::post('/area/erase','backend\AreaController@destroy')->name('area.destroy');
    Route::post('area/update','backend\AreaController@update')->name('area.update');
});


Route::post('wishlist-store','backend\ProductController@wishlist_store')->name('wishlist.store');
Route::get('wishlist-store/{user_id}/{product_id}','backend\ProductController@wish_list_store_api');
Route::get('/wishlist-view','backend\RoleController@wish')->name('wish.view');
Route::get('/wishlist-erase/{id}','backend\WishController@destroy')->name('clear.wish');
Route::get('wishlist/truncate-list','backend\WishController@clear_wishlist');


Route::get('auth/{provider}',                           [SocialController::class, 'socialRedirect'])->name('social-login');
Route::get('auth/google/callback',                  [SocialController::class, 'loginWithSocial']);

/** Android Common Routes */
// Route::post('api/android-login','AndroidCommonController@login');
// Route::post('api/android-reset-email','AndroidCommonController@resetEmail');
// Route::get('api/android-get-user/{id}','AndroidCommonController@get_user');
// Route::get('api/tawkto','AndroidCommonController@tawkto');
// Route::post('api/add_to_wishlist/{id}/{id}','AndroidCommonController@add_to_wishlist');
// Route::get('website_data_modify','WebsiteContentController@website_data_modify')->name('website_data_modify');




















