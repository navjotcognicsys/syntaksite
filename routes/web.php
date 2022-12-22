<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\BlogController;

Route::post('/email', [ContactController::class, 'email']);

Route::get('/',[ GeneralController::class,'index' ])->name('home');
Route::get('/about',[ GeneralController::class,'about' ])->name('about');
Route::get('/service',[ GeneralController::class,'service' ])->name('service');
Route::get('/blog',[ GeneralController::class,'blog' ])->name('blog');
Route::get('/dark-posting',[ GeneralController::class,'dark_posting' ])->name('dark-posting');
Route::get('/graphic-desing-plays-important',[ GeneralController::class,'graphic_desing' ])->name('graphic-desing-plays-important');

Route::get('/blog-details',[ GeneralController::class,'blog_details' ])->name('blog-details');
Route::get('/contact',[ GeneralController::class,'contact' ])->name('contact');
Route::get('/careers-page',[ GeneralController::class,'careers' ])->name('careers_page');

Route::get('/full-stack-dev',[ GeneralController::class,'full_stack_dev' ])->name('full_stack_dev');

Route::get('/wordpress-dev',[ GeneralController::class,'wordpress_dev' ])->name('wordpress_dev');
Route::get('/graphic-designer',[ GeneralController::class,'graphic_designer' ])->name('graphic_designer');
Route::get('/web-development',[ GeneralController::class,'webdevelopment' ])->name('webdevelopment');
Route::get('/mobile-development',[ GeneralController::class,'mobiledevelopment' ])->name('mobiledevelopment');
Route::get('/UI-UX-proto',[ GeneralController::class,'UIUXproto' ])->name('UIUXproto');

Route::get('/graphic-design-proto',[ GeneralController::class,'graphicdesignproto' ])->name('graphicdesignproto');
Route::get('/digital-marketing-careers',[ GeneralController::class,'digitalmarketingcareers' ])->name('digitalmarketingcareers');
Route::get('/bussiness-dev',[ GeneralController::class,'Bussiness_dev' ])->name('Bussiness_dev');
Route::get('/retail-branding',[ GeneralController::class,'retailbranding' ])->name('retailbranding');
Route::get('/digital-marketing',[ GeneralController::class,'digitalmarketing' ])->name('digitalmarketing');


Route::get('/ui-ux',[ GeneralController::class,'uiuxcareer' ])->name('uiuxcareer');
Route::get('/it-service',[ GeneralController::class,'itservice' ])->name('itservice');
Route::get('/bussiness-reform',[ GeneralController::class,'bussinessreform' ])->name('bussinessreform');
Route::get('/infrastructure',[ GeneralController::class,'infrastructure' ])->name('infrastructure');

Route::get('/remote-engineers',[ GeneralController::class,'remoteengineers' ])->name('remoteengineers');
Route::get('/bussiness-security',[ GeneralController::class,'bussiness_security' ])->name('bussiness-security');
Route::get('/product-analysis',[ GeneralController::class,'product_analysis' ])->name('product-analysis');
Route::get('/manage-it-service',[ GeneralController::class,'manage_it_service' ])->name('manage-it-service');

Route::get('/analytic-solution',[ GeneralController::class,'analytic_solution' ])->name('analytic-solution');
Route::get('/finest-quality',[ GeneralController::class,'finest_quality' ])->name('finest-quality');
Route::get('/risk-management',[ GeneralController::class,'risk_management' ])->name('risk-management');
Route::get('/bussiness-develoment-executive',[ GeneralController::class,'Bussiness_dev' ])->name('bussiness-develoment-executive');
Route::post('/blog-c', [BlogController::class,'store'])->name('blog_comment');

// Route::get('/', function () {
//     return view('index-2');
// });


// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/careers_page', function () {
//     return view('careers');
// });
// Route::get('/full_stack_dev', function () {
//     return view('fullstackdev');
// });
// Route::get('/wordpress_dev', function () {
//     return view('wordpresscareer');
// });
// Route::get('/graphic_designer', function () {
//     return view('graphicdesignercareer');
// });
// Route::get('/digitalmarketingcareers', function () {
//     return view('digitalmarketingcareers');
// });
// Route::get('/Bussiness_dev', function () {
//     return view('bde');
// });
// Route::get('/uiux', function () {
//     return view('uiuxcareer');
// });
// Route::get('/pages', function () {
//     return view('pages');
// });
// Route::get('/service', function () {
//     return view('services-2');
// });
// Route::get('/blog', function () {
//     return view('blog-2');
// });
// Route::get('/blog-details',[BlogController::class,'index']);




// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/itservice', function () {
//     return view('service-details');
// });
// Route::get('/digitalmarketing', function () {
//     return view('digital marketing');
// });
// Route::get('/retailbranding', function () {
//     return view('retailbrandingg');
// });
// Route::get('/webdevelopment', function () {
//     return view('webdevelopment');
// });
// Route::get('/mobiledevelopment', function () {
//     return view('mobiledevolpment');
// });
// Route::get('/UIUXproto', function () {
//     return view('UIUXproto');
// });
// Route::get('/graphicdesignproto', function () {
//     return view('graphicdesignproto');
// });
// Route::get('/bussinessreform', function () {
//     return view('bussiness reform');
// });
// Route::get('/infrastructure', function () {
//     return view('infrastructure');
// });
// Route::get('/remoteengineers', function () {
//     return view('remote engineers');
// });
// Route::get('/bussiness-security', function () {
//     return view('bussiness-security');
// });
// Route::get('/product-analysis', function () {
//     return view('product-analysis');
// });
// Route::get('/manage-it-service', function () {
//     return view('manage-it-service');
// });
// Route::get('/analytic-solution', function () {
//     return view('analytic-solution');
// });
// Route::get('/finest-quality', function () {
//     return view('finest-quality');
// });
// Route::get('/risk-management', function () {
//     return view('risk-management');
// });
// Route::get('/bussiness-develoment-executive', function () {
//     return view('bde');
// });


// Route::get('/dark-posting', function () {
//     return view('blog-details2');
// });

// Route::get('/graphic-desing-plays-important', function () {
//     return view('blog-details3');
// });

