<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccessibilityController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\EUDisputeController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\LegalNoticeController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;




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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::post('/auth-login', [AuthenticatedSessionController::class, 'store']);
Route::get('logout', [AuthenticatedSessionController::class, 'destroy']);
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        // Route::get('/', function () {
        //     return view('dashboard-eCommerce');
        // });
        Route::get('/', [SliderController::class, 'dashboard']);
        /*Slider*/
        Route::get('/slider', [SliderController::class, 'index']);
        Route::get('/add_new_slider', [SliderController::class, 'add']);
        Route::get('/slider_edit/{id}', [SliderController::class, 'edit']);
        Route::get('/slider_delete/{id}', [SliderController::class, 'destroy']);
        Route::post('/slider_insert', [SliderController::class, 'insert']);
        Route::post('/slider_update', [SliderController::class, 'update']);
        /*Slider*/
        /*Expertise*/
        Route::get('/expertise', [ExpertiseController::class, 'index']);
        Route::get('/add_new_expertise', [ExpertiseController::class, 'add_new']);
        Route::get('/expertise_edit/{id}', [ExpertiseController::class, 'edit']);
        Route::get('/expertise_delete/{id}', [ExpertiseController::class, 'destroy']);
        Route::post('/expertise_insert', [ExpertiseController::class, 'insert']);
        Route::post('/expertise_update', [ExpertiseController::class, 'update']);
        /*Expertise*/
        /*about*/
        Route::get('/about_us', [AboutUsController::class, 'index']);
        Route::post('/about_update', [AboutUsController::class, 'update']);
        /*about*/
        /*team*/
        Route::get('/team', [TeamController::class, 'index']);
        Route::get('/team_add', [TeamController::class, 'add_new']);
        Route::get('/team_edit/{id}', [TeamController::class, 'edit']);
        Route::get('/team_delete/{id}', [TeamController::class, 'destroy']);
        Route::post('/team_insert', [TeamController::class, 'insert']);
        Route::post('/team_update', [TeamController::class, 'update']);
        Route::get('/upload_cv/{id}', [TeamController::class, 'upload_cv']);
        Route::post('/upload_cv_post', [TeamController::class, 'upload_cv_post']);
        /*team*/
        /*Funding*/
        Route::get('/funding', [FundingController::class, 'index']);
        Route::get('/add_new_funding', [FundingController::class, 'add_new']);
        Route::get('/funding_edit/{id}', [FundingController::class, 'edit']);
        Route::get('/funding_delete/{id}', [FundingController::class, 'destroy']);
        Route::post('/funding_insert', [FundingController::class, 'insert']);
        Route::post('/funding_update', [FundingController::class, 'update']);
        /*Funding*/
        /*Career*/
        Route::get('/career', [CareerController::class, 'index']);
        Route::get('/add_new_career', [CareerController::class, 'add_new']);
        Route::get('/career_edit/{id}', [CareerController::class, 'edit']);
        Route::get('/career_delete/{id}', [CareerController::class, 'destroy']);
        Route::post('/career_insert', [CareerController::class, 'insert']);
        Route::post('/career_update', [CareerController::class, 'update']);
        /*Career*/
        /*blog*/
        Route::get('/blog', [BlogController::class, 'index']);
        Route::get('/add_new_post', [BlogController::class, 'add_new']);
        Route::get('/blog_edit/{id}', [BlogController::class, 'edit']);
        Route::get('/blog_delete/{id}', [BlogController::class, 'destroy']);
        Route::post('/blog_insert', [BlogController::class, 'insert']);
        Route::post('/blog_update', [BlogController::class, 'update']);
        /*blog*/
        /*Category*/
        Route::get('/category', [CategoryController::class, 'index']);
        Route::get('/add_new_category', [CategoryController::class, 'add_new']);
        Route::get('/category_edit/{id}', [CategoryController::class, 'edit']);
        Route::get('/category_delete/{id}', [CategoryController::class, 'destroy']);
        Route::post('/category_insert', [CategoryController::class, 'insert']);
        Route::post('/category_update', [CategoryController::class, 'update']);
        /*Category*/
        /*Cv_Category_Category*/
        Route::get('/cv/{id}', [CategoryController::class, 'cv']);
        Route::get('/get_category/{id}', [CategoryController::class, 'get_category']);
        Route::post('/update_cv', [CategoryController::class, 'update_cv']);
        
        
        Route::get('/cv_category_category', [CategoryController::class, 'cv_category_index']);
        Route::get('/cv_category_add_new_category', [CategoryController::class, 'cv_category_add_new']);
        Route::get('/cv_category_category_edit/{id}', [CategoryController::class, 'cv_category_edit']);
        Route::get('/cv_category_category_delete/{id}', [CategoryController::class, 'cv_category_destroy']);
        Route::post('/cv_category_category_insert', [CategoryController::class, 'cv_category_insert']);
        Route::post('/cv_category_category_update', [CategoryController::class, 'cv_category_update']);
        /*Cv_Category_Category*/
        /*Contact*/
        Route::get('/contact', [ContactController::class, 'index']);
        Route::get('/add_new_contact', [ContactController::class, 'add_new']);
        Route::get('/contact_edit/{id}', [ContactController::class, 'edit']);
        Route::get('/contact_delete/{id}', [ContactController::class, 'destroy']);
        Route::post('/contact_insert', [ContactController::class, 'insert']);
        Route::post('/contact_update', [ContactController::class, 'update']);
        /*Contact*/
        Route::get('/emergency_contact', [ContactController::class, 'emergency_contact']);
        
        /*Contact Us*/
        Route::get('/apply_us', [ContactController::class, 'apply_us']);
        Route::get('/contact_us', [ContactController::class, 'contact_us']);
        /*Contact Us*/

        /*Setting*/
        Route::get('/setting', [SettingController::class, 'index']);
        Route::post('/setting_update', [SettingController::class, 'update']);
        /*Setting*/
        /*complaint_procedure*/
        Route::get('/complaint_procedure', [ComplaintController::class, 'index']);
        Route::post('/complaint_procedure_update', [ComplaintController::class, 'update']);
        /*complaint_procedure*/
        /*term of use*/
        Route::get('/terms', [TermsController::class, 'index']);
        Route::post('/term_of_use_update', [TermsController::class, 'update']);
       
        /*term of use*/
        /*privacy*/
        Route::get('/privacy', [PrivacyController::class, 'index']);
        Route::post('/privacy_update', [PrivacyController::class, 'update']);
        /*privacy*/
        /*cookie_policy*/
        Route::get('/cookie_policy', [CookieController::class, 'index']);
        Route::post('/cookie_policy_update', [CookieController::class, 'update']);
        /*cookie_policy*/
        /*accessibility*/
        Route::get('/accessibility', [AccessibilityController::class, 'index']);
        Route::post('/accessibility_update', [AccessibilityController::class, 'update']);
        /*accessibility*/
        /*legal_notice*/
        Route::get('/legal_notice', [LegalNoticeController::class, 'index']);
        Route::post('/legal_notice_update', [LegalNoticeController::class, 'update']);
        /*legal_notice*/
        /*disclaimer*/
        Route::get('/disclaimer', [DisclaimerController::class, 'index']);
        Route::post('/disclaimer_update', [DisclaimerController::class, 'update']);
        /*disclaimer*/
        /*eu_dispute*/
        Route::get('/eu_dispute', [EUDisputeController::class, 'index']);
        Route::post('/eu_dispute_update', [EUDisputeController::class, 'update']);
        /*eu_dispute*/

        Route::get('/social_media', [SocialMediaController::class, 'index']);
       

        // Route::get('/terms', [TermsController::class, 'index']);
        // Route::get('/privacy', [PrivacyController::class, 'index']);
        // Route::get('/cookie_policy', [CookieController::class, 'index']);
        // Route::get('/accessibility', [AccessibilityController::class, 'index']);
        // Route::get('/legal_notice', [LegalNoticeController::class, 'index']);
        // Route::get('/disclaimer', [DisclaimerController::class, 'index']);
        // Route::get('/eu_dispute', [EUDisputeController::class, 'index']);
    });
});

require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [WebsiteController::class, 'index']);

Route::get('/team', [WebsiteController::class, 'team']);
Route::post('/team_detail', [WebsiteController::class, 'view']);
Route::get('/expertise/{id}', [WebsiteController::class, 'expertise']);
Route::get('/funding', [WebsiteController::class, 'funding']);
Route::get('/career', [WebsiteController::class, 'career']);
Route::get('/blog', [WebsiteController::class, 'blog']);
Route::get('/blog_detail/{id}', [WebsiteController::class, 'blog_detail']);
Route::get('/catgeory_blog/{id}', [WebsiteController::class, 'catgeory_blog']);
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::post('/contact_insert', [WebsiteController::class, 'contact_insert']);

Route::get('/apply', [WebsiteController::class, 'apply']);
Route::post('/apply_insert', [WebsiteController::class, 'apply_insert']);

Route::post('/emergency_contact', [WebsiteController::class, 'emergency_contact']);

/* Footer links */
Route::get('/complaint-procedure', [WebsiteController::class, 'complaint_procedure']);
Route::get('/terms-of-use', [WebsiteController::class, 'terms_of_use']);
Route::get('/privacy-policy', [WebsiteController::class, 'privacy_policy']);
Route::get('/cookie-policy', [WebsiteController::class, 'cookie_policy']);
Route::get('/accessibility_link', [WebsiteController::class, 'accessibility']);
Route::get('/legal-notice', [WebsiteController::class, 'legal_notice']);
Route::get('/eu-online-dispute', [WebsiteController::class, 'eu_online_dispute']);
Route::get('/disclaimer_link', [WebsiteController::class, 'disclaimer_link']);
/* Footer links */




/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::prefix('admin1')->group(function () {
// Route::get('/', function () {
//     return view('authentication-signin');
// });
// });
// Route::get('/dashboard-eCommerce', function () {
//     return view('dashboard-eCommerce');
// });
// Route::get('/dashboard-sales', function () {
//     return view('dashboard-sales');
// });
// Route::get('/dashboard-analytics', function () {
//     return view('dashboard-analytics');
// });
// Route::get('/dashboard-alternate', function () {
//     return view('dashboard-alternate');
// });
// Route::get('/dashboard-digital-marketing', function () {
//     return view('dashboard-digital-marketing');
// });
// Route::get('/dashboard-human-resources', function () {
//     return view('dashboard-human-resources');
// });
// /*App*/
// Route::get('/app-emailbox', function () {
//     return view('app-emailbox');
// });
// Route::get('/app-emailread', function () {
//     return view('app-emailread');
// });
// Route::get('/app-chat-box', function () {
//     return view('app-chat-box');
// });
// Route::get('/app-file-manager', function () {

//     return view('app-file-manager');
// });
// Route::get('/app-contact-list', function () {
//     return view('app-contact-list');
// });
// Route::get('/app-to-do', function () {
//     return view('app-to-do');
// });
// Route::get('/app-invoice', function () {
//     return view('app-invoice');
// });
// Route::get('/app-fullcalender', function () {
//     return view('app-fullcalender');
// });
// /*Charts*/
// Route::get('/charts-apex-chart', function () {
//     return view('charts-apex-chart');
// });
// Route::get('/charts-chartjs', function () {
//     return view('charts-chartjs');
// });
// Route::get('/charts-highcharts', function () {
//     return view('charts-highcharts');
// });
// /*Maps*/
// Route::get('/map-google-maps', function () {
//     return view('map-google-maps');
// });
// Route::get('/map-vector-maps', function () {
//     return view('map-vector-maps');
// });

// /*Components*/
// Route::get('/widgets', function () {
//     return view('widgets');
// });
// /*ecommerce*/
// Route::get('/ecommerce-products', function () {
//     return view('ecommerce-products');
// });
// Route::get('/ecommerce-products-details', function () {
//     return view('ecommerce-products-details');
// });
// Route::get('/ecommerce-add-new-products', function () {
//     return view('ecommerce-add-new-products');
// });
// Route::get('/ecommerce-orders', function () {
//     return view('ecommerce-orders');
// });
// /*Components*/
// Route::get('/component-alerts', function () {
//     return view('component-alerts');
// });
// Route::get('/component-accordions', function () {
//     return view('component-accordions');
// });
// Route::get('/component-badges', function () {
//     return view('component-badges');
// });
// Route::get('/component-buttons', function () {
//     return view('component-buttons');
// });
// Route::get('/component-cards', function () {
//     return view('component-cards');
// });
// Route::get('/component-carousels', function () {
//     return view('component-carousels');
// });

// Route::get('/component-list-groups', function () {
//     return view('component-list-groups');
// });
// Route::get('/component-media-object', function () {
//     return view('component-media-object');
// });
// Route::get('/component-modals', function () {
//     return view('component-modals');
// });
// Route::get('/component-navs-tabs', function () {
//     return view('component-navs-tabs');
// });
// Route::get('/component-navbar', function () {
//     return view('component-navbar');
// });
// Route::get('/component-paginations', function () {
//     return view('component-paginations');
// });

// Route::get('/component-popovers-tooltips', function () {
//     return view('component-popovers-tooltips');
// });
// Route::get('/component-progress-bars', function () {
//     return view('component-progress-bars');
// });
// Route::get('/component-spinners', function () {
//     return view('component-spinners');
// });
// Route::get('/component-notifications', function () {
//     return view('component-notifications');
// });
// Route::get('/component-avtars-chips', function () {
//     return view('component-avtars-chips');
// });
// /*Content*/
// Route::get('/content-grid-system', function () {
//     return view('content-grid-system');
// });
// Route::get('/content-typography', function () {
//     return view('content-typography');
// });
// Route::get('/content-text-utilities', function () {
//     return view('content-text-utilities');
// });
// /*Icons*/
// Route::get('/icons-line-icons', function () {
//     return view('icons-line-icons');
// });
// Route::get('/icons-boxicons', function () {
//     return view('icons-boxicons');
// });
// Route::get('/icons-feather-icons', function () {
//     return view('icons-feather-icons');
// });

// /*Authentication*/

// Route::get('/authentication-signup', function () {
//     return view('authentication-signup');
// });
// Route::get('/authentication-signin-with-header-footer', function () {
//     return view('authentication-signin-with-header-footer');
// });
// Route::get('/authentication-signup-with-header-footer', function () {
//     return view('authentication-signup-with-header-footer');
// });
// Route::get('/authentication-forgot-password', function () {
//     return view('authentication-forgot-password');
// });
// Route::get('/authentication-reset-password', function () {
//     return view('authentication-reset-password');
// });
// Route::get('/authentication-lock-screen', function () {
//     return view('authentication-lock-screen');
// });
// /*Pages*/
// Route::get('/user-profile', function () {
//     return view('user-profile');
// });
// Route::get('/timeline', function () {
//     return view('timeline');
// });
// Route::get('/pricing-table', function () {
//     return view('pricing-table');
// });
// Route::get('/errors-404-error', function () {
//     return view('errors-404-error');
// });
// Route::get('/errors-500-error', function () {
//     return view('errors-500-error');
// });
// Route::get('/errors-coming-soon', function () {
//     return view('errors-coming-soon');
// });
// Route::get('/error-blank-page', function () {
//     return view('error-blank-page');
// });
// Route::get('/faq', function () {
//     return view('faq');
// });

// /*Forms*/
// Route::get('/form-elements', function () {
//     return view('form-elements');
// });

// Route::get('/form-input-group', function () {
//     return view('form-input-group');
// });
// Route::get('/form-layouts', function () {
//     return view('form-layouts');
// });

// Route::get('/form-layouts', function () {
//     return view('form-layouts');
// });
// Route::get('/form-validations', function () {
//     return view('form-validations');
// });
// Route::get('/form-wizard', function () {
//     return view('form-wizard');
// });
// Route::get('/form-text-editor', function () {
//     return view('form-text-editor');
// });
// Route::get('/form-file-upload', function () {
//     return view('form-file-upload');
// });
// Route::get('/form-date-time-pickes', function () {
//     return view('form-date-time-pickes');
// });
// Route::get('/form-select2', function () {
//     return view('form-select2');
// });
// /*Table*/
// Route::get('/table-basic-table', function () {
//     return view('table-basic-table');
// });
// Route::get('/table-datatable', function () {
//     return view('table-datatable');
// });

// /*Un-found*/
// Route::get('/test/content-grid-system', function () {
//     return view('test/content-grid-system');
// });
