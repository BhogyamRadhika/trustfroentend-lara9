<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('landingpage'); // Public landing page
});

Auth::routes(); // Handles authentication routes

// Login route (optional if already handled by Auth::routes)
Route::post('/login/post', [LoginController::class, 'login'])->name('login.post');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Protected routes - only accessible by authenticated users
Route::middleware(['auth'])->group(function () {    // Default redirection for `/`
    Route::post('/set_cart', [HomeController::class, 'addToCart'])->name('cart.add');
    Route::delete('/delete_cart/{id}', [HomeController::class, 'removeToCart'])->name('cart.delete_cart');
    Route::post('payu-failure', [HomeController::class, 'failure'])->name('payu-failure');
    Route::get('/payment_details', [HomeController::class, 'paymentDetails'])->name('payment_details');
    // Route::get('/cart', [HomeController::class, 'cart'])->name('cart'); 
    Route::get('/cart', [HomeController::class, 'cart'])->name('cart'); 
    Route::post('/payu/redirect', [HomeController::class, 'redirectToPayU'])->name('payu.payment.form');
    Route::post('/payu/response', [HomeController::class, 'payuResponse'])
    ->name('payu.response')->withoutMiddleware('auth');
    Route::get('/payu/failure', [HomeController::class, 'paymentFailure'])->name('payu.failure');

//membership plans
Route::post('/membership/pay', [HomeController::class, 'payMembership'])->name('membership.pay');
Route::post('/membership/payment/response', [HomeController::class, 'membershipPaymentResponse'])->name('membershipPay.response')->withoutMiddleware('auth');
Route::post('/membership/payment-failure', [HomeController::class, 'membershipPaymentFailure'])->name('membership.payment.failure');
// Route::get('/whats-app/tets/{phone?}', [HomeController::class, 'sendWhatsAppMessagePay2']);
    });
    Route::get('/payu/success', action: [HomeController::class, 'paymentSuccess'])->name('payu.success')->withoutMiddleware('auth');
    Route::get('/payu/success', action: [HomeController::class, 'paymentSuccess'])->name('payu.success')->withoutMiddleware('auth');
    Route::get('/', function () {
        return redirect()->route('index');
    });

    // Main routes
    Route::get('/index', [HomeController::class, 'index'])->name('index');
    Route::get('/membership', [HomeController::class, 'membership'])->name('membership');
    Route::get('/partnership', [HomeController::class, 'partnership'])->name('partnership');

    Route::post('contact/update', [HomeController::class, 'submitContact'])->name('contact.update');
    Route::get('/about', [HomeController::class, 'about'])->name('aboutus');
    Route::get('/ourDoctors', [HomeController::class, 'ourDoctors'])->name('ourDoctors');
    Route::get('/blog-single', [HomeController::class, 'blogsingle'])->name('blog');
    Route::get('/brouchers', [HomeController::class, 'brouchers'])->name('brouchers');
    Route::get('/newsroom', [HomeController::class, 'newsroom'])->name('newsroom');
    Route::get('/scientificPublications', [HomeController::class, 'scientificPublications'])->name('scientificPublications');
    Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
    Route::get('/lifeAtTRUSTlab', [HomeController::class, 'lifeAtTRUSTlab'])->name('lifeAtTRUSTlab');
    Route::get('/currentOpportunities', [HomeController::class, 'currentOpportunities'])->name('currentOpportunities');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/diagnosticsolutions', [HomeController::class, 'diagnosticsolutions'])->name('diagnosticsolutions');
    Route::get('/leadershipteam', [HomeController::class, 'leadershipteam'])->name('leadershipteam');
    Route::get('/boardOfAdvisors', [HomeController::class, 'boardOfAdvisors'])->name('boardOfAdvisors');
    Route::get('/boardOfDirectors', [HomeController::class, 'boardOfDirectors'])->name('boardOfDirectors');
    Route::get('/diagnosticexpertise', [HomeController::class, 'diagnosticexpertise'])->name('diagnosticexpertise');
    Route::get('/edos-search', [HomeController::class, 'edosSearch'])->name('edosSearch');
    Route::post('contact2/update', [HomeController::class, 'updateContact2'])->name('contact2.update');






    
