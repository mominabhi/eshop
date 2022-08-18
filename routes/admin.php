<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

Route::group(['namespace' => 'Backend', 'prefix'=>'admin', 'as'=>'admin.', 'middleware'=>['auth']], function () {

    Route::get('/',[DashboardController::class,'index'])->name('index');


});