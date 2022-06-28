<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\FundController;
use App\Http\Controllers\Admin\AdminController;

Route::group(['as'=>'admin::','prefix'=>'admin','middleware' => ['web','admin','revalidate']], function () {

 Route::get('dashboard', [IndexController::class, 'index'])->name('dashboard');
    #Pages
    Route::resource('page', PagesController::class);

    #News
    Route::resource('news', NewsController::class);

    #Funds
    Route::resource('fund', FundController::class);


});










