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
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Protected routes - only accessible by authenticated users
Route::middleware(['web', 'auth'])->group(function () {    // Default redirection for `/`
    Route::get('/', function () {
        return redirect()->route('index');
    });

    // Main routes
    Route::get('/index', [HomeController::class, 'index'])->name('index');
    Route::get('/membership', [HomeController::class, 'membership'])->name('membership');
    Route::get('/partnership', [HomeController::class, 'partnership'])->name('partnership');

    // Static pages
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

    // Cart routes
    Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
    Route::post('/set_cart', [HomeController::class, 'addToCart'])->name('cart.add');
    Route::delete('/delete_cart/{id}', [HomeController::class, 'removeToCart'])->name('cart.delete_cart');

    // PayU Payment routes
    // Route::post('payu/payment', [HomeController::class, 'initiatePayment'])->name('payu.payments');
    Route::match(['get', 'post'], 'pay-u-money-view', [HomeController::class, 'payUMoneyView'])->name('payu.payments');
    Route::get('payu/success', [HomeController::class, 'payuSuccess'])->name('pay.u.response');
    Route::get('payu/failure', [HomeController::class, 'payuFailure'])->name('pay.u.cancel');
    Route::post('payu/callback', [HomeController::class, 'handleCallback'])->name('payu.callback');

    // Additional pages
    Route::get('/diagnosticsolutions', [HomeController::class, 'diagnosticsolutions'])->name('diagnosticsolutions');
    Route::get('/leadershipteam', [HomeController::class, 'leadershipteam'])->name('leadershipteam');
    Route::get('/boardOfAdvisors', [HomeController::class, 'boardOfAdvisors'])->name('boardOfAdvisors');
    Route::get('/boardOfDirectors', [HomeController::class, 'boardOfDirectors'])->name('boardOfDirectors');
    Route::get('/diagnosticexpertise', [HomeController::class, 'diagnosticexpertise'])->name('diagnosticexpertise');

    Route::get('/payment_details', [HomeController::class, 'paymentDetails'])->name('payment_details');
});
