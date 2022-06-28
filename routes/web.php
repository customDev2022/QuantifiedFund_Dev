<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\FrontController;
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

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/adminlogin', [AdminController::class, 'checkLogin'])->name('checkadmin');
// index(Home) route
Route::get('/', [FrontController::class, 'home'])->name('home');
// About route
Route::get('/about', [FrontController::class, 'about'])->name('about');
// Contact Route
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
// first quarter
Route::get('/first-quarter', [FrontController::class, 'first_quarter'])->name('first-quarter');

// fund document
Route::get('/fund-document', [FrontController::class, 'fund_document'])->name('fund-document');
// fund family
Route::get('/fund-family', [FrontController::class, 'fund_family'])->name('fund-family');
// managed-income-fund
Route::get('/managed-income-fund', [FrontController::class, 'managed_income_fund'])->name('managed-income-fund');
// market-updates
Route::get('/market-updates', [FrontController::class, 'market_updates'])->name('market-updates');
// news route
Route::get('/news', [FrontController::class, 'news'])->name('news');
// performance route
Route::get('/performance', [FrontController::class, 'performance'])->name('performance');
// privacy route
Route::get('/privacy', [FrontController::class, 'privacy'])->name('privacy');
// risk-defination
Route::get('/risk-definition', [FrontController::class, 'risk_definition'])->name('risk-definition');
// terms-conditon
Route::get('/terms-condition', [FrontController::class, 'terms_condition'])->name('terms-condition');

require __DIR__ . '/auth.php';
